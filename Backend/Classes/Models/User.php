<?php

namespace Backend\Classes\Models;

class User
{
    private string $name;
    private string $email;
    private string $pass;
    private int $age;

    /**
     * User constructor.
     * @param string $name
     * @param string $email
     * @param string $pass
     * @param int $age
     */
    public function __construct(string $name, string $email, string $pass, int $age)
    {
        $this->name = $name;
        $this->email = $email;
        $this->pass = $pass;
        $this->age = $age;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPass(): string
    {
        return $this->pass;
    }

    /**
     * @param string $pass
     */
    public function setPass(string $pass): void
    {
        $this->pass = $pass;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }
}