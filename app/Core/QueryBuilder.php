<?php

namespace App\Core;

use PDO;
use App\Core\Collection;

class QueryBuilder
{
    protected $table;
    protected $select = ['*'];
    protected $wheres = [];
    protected $joins = [];
    protected $groupBys = [];
    protected $orderBys = [];
    protected $limit;
    protected $offset;
    protected $bindings = [];

    protected $modelClass;

    public function table(string $table): self
    {
        $this->table = $table;
        return $this;
    }

    public function asModel(string $class): self
    {
        $this->modelClass = $class;
        return $this;
    }

    public function select(string ...$fields): self
    {
        $this->select = $fields;
        return $this;
    }

    public function where(string $column, string $operator, $value): self
    {
        $this->wheres[]   = "$column $operator ?";
        $this->bindings[] = $value;
        return $this;
    }

    public function orWhere(string $column, string $operator, $value): self
    {
        $this->wheres[]   = "OR $column $operator ?";
        $this->bindings[] = $value;
        return $this;
    }

    public function join(string $table, string $first, string $operator, string $second): self
    {
        $this->joins[] = "JOIN $table ON $first $operator $second";
        return $this;
    }

    public function leftJoin(string $table, string $first, string $operator, string $second): self
    {
        $this->joins[] = "LEFT JOIN $table ON $first $operator $second";
        return $this;
    }

    public function groupBy(string ...$columns): self
    {
        $this->groupBys = $columns;
        return $this;
    }

    public function orderBy(string $column, string $direction = 'ASC'): self
    {
        $this->orderBys[] = "$column $direction";
        return $this;
    }

    public function limit(int $limit): self
    {
        $this->limit = $limit;
        return $this;
    }

    public function offset(int $offset): self
    {
        $this->offset = $offset;
        return $this;
    }

    public function get(): Collection
    {
        $sql  = $this->toSql();
        $stmt = Database::getInstance()->getConnection()->prepare($sql);
        $stmt->execute($this->bindings);

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $items = [];

        foreach ($rows as $row) {
            if ($this->modelClass) {
                $items[] = new $this->modelClass($row);
            } else {
                $items[] = $row;
            }
        }

        return new Collection($items);
    }

    public function first()
    {
        $this->limit(1);
        $collection = $this->get();
        return $collection->first();
    }

    public function insert(array $data)
    {
        $columns = array_keys($data);
        $placeholders = array_fill(0, count($columns), '?');

        $sql = "INSERT INTO {$this->table} (".implode(',', $columns).") VALUES (".implode(',', $placeholders).")";

        $stmt = Database::getInstance()->getConnection()->prepare($sql);
        $stmt->execute(array_values($data));

        $id = Database::getInstance()->getConnection()->lastInsertId();

        if ($this->modelClass) {
            $data['id'] = $id;
            return new $this->modelClass($data);
        }

        return $id;
    }

    public function update(array $data): bool
    {
        $setParts = [];
        foreach ($data as $key => $value) {
            $setParts[] = "$key = ?";
            $this->bindings[] = $value;
        }

        $sql = "UPDATE {$this->table} SET ".implode(', ', $setParts);

        if (!empty($this->wheres)) {
            $sql .= " WHERE ".implode(' ', $this->wheres);
        }
        $this->bindings = array_reverse($this->bindings);

        $stmt = Database::getInstance()->getConnection()->prepare($sql);
        return $stmt->execute($this->bindings);
    }

    public function delete(): bool
    {
        $sql = "DELETE FROM {$this->table}";

        if (!empty($this->wheres)) {
            $sql .= " WHERE ".implode(' ', $this->wheres);
        }

        $stmt = Database::getInstance()->getConnection()->prepare($sql);
        return $stmt->execute($this->bindings);
    }

    public function toSql(): string
    {
        $sql = "SELECT ".implode(', ', $this->select)." FROM {$this->table}";

        if (!empty($this->joins)) {
            $sql .= ' '.implode(' ', $this->joins);
        }

        if (!empty($this->wheres)) {
            $sql .= " WHERE ".implode(' ', $this->wheres);
        }

        if (!empty($this->groupBys)) {
            $sql .= " GROUP BY ".implode(', ', $this->groupBys);
        }

        if (!empty($this->orderBys)) {
            $sql .= " ORDER BY ".implode(', ', $this->orderBys);
        }

        if ($this->limit !== null) {
            $sql .= " LIMIT {$this->limit}";
        }

        if ($this->offset !== null) {
            $sql .= " OFFSET {$this->offset}";
        }

        return $sql;
    }
}
