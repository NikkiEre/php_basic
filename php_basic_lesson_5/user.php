<?php

class User 
{
    private string $username;
    private string $email;
    private string $sex;
    private int $age;
    private bool $isActive = true;
    private DateTime $dateCreated;

    function __construct(string $username, string $email, string $sex, int $age) {
        $this->username = $username;
        $this->email = $email;
        $this->sex = $sex ?? "";
        $this->age = $age ?? null;
        $this->dateCreated = new DateTime();
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getSex()
    {
        return $this->sex;
    }

    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getIsActive()
    {
        return $this->isActive;
    }

    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }

    public function getDateCreated()
    {
        return $this->dateCreated;
    }
}

