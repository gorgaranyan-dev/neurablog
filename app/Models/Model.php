<?php

namespace App\Models;

use App\Core\QueryBuilder;
use App\Core\Collection;

abstract class Model
{
    public int $id;

    public function __construct(array $attributes = [])
    {
        $this->fill($attributes);
    }

    public function fill(array $attributes): void
    {
        if (empty($attributes) || empty(static::FILLABLE)) {
            return;
        }
        foreach ($attributes as $key => $value) {
            if (property_exists($this, $key) && in_array($key, static::FILLABLE)) {
                $this->$key = $value;
            }
        }
    }

    public static function find(int $id): ?static
    {
        return static::query()->where('id', '=', $id)->first();
    }

    public static function where(string $column, string $operator, $value): Collection
    {
        return static::query()->where($column, $operator, $value)->get();
    }

    public static function query(): QueryBuilder
    {
        $table = static::getTable();

        return (new QueryBuilder())->table($table)->asModel(static::class);
    }

    public static function getTable(): string
    {
        return static::TABLE_NAME;
    }

    public static function all(): Collection
    {
        return static::query()->get();
    }

    public static function create(array $data): self
    {
        return static::query()->insert($data);
    }

    public function __get(string $key)
    {
        return $this->attributes[$key] ?? null;
    }

    public function __set(string $key, $value): void
    {
        $this->attributes[$key] = $value;
    }

    public function update(array $data): bool
    {
        return static::query()->where('id', '=', $this->id)->update($data);
    }

    public function delete(): bool
    {
        return static::query()->where('id', '=', $this->id)->delete();
    }

    public function toArray(): array
    {
        return $this->attributes;
    }
}
