<?php

namespace App\Models;

class User extends Model
{
    public const TABLE_NAME = 'users';
    public const FILLABLE = array(
        'id',
        'name',
        'email',
        'is_admin',
        'password',
        'created_at'
    );

    public string $name;
    public string $email;
    public string $password;
    public int $is_admin;
    public string $created_at;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getIsAdmin(): int
    {
        return $this->is_admin;
    }

    public function setIsAdmin(int $is_admin)
    {
        $this->is_admin = $is_admin;
    }

    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    public function setCreatedAt(string $createdAt)
    {
        $this->created_at = $createdAt;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId(int $id){
        $this->id = $id;
    }
}