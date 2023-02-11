<?php

class Password
{
    private $password;

    public function __construct($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function generate($length = 8, $complexity = "slabí")
    {
        $chars = "";
        if ($complexity == "slabé") {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        } elseif ($complexity == "silné") {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+=-";
        }

        $this->password = substr(str_shuffle($chars), 0, $length);
        return $this->password;
    }

    public function check($other)
    {
        return $this->password === $other;
    }
}

?>