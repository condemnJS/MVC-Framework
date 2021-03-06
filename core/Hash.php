<?php


namespace core;


class Hash
{
    public static function make($value)
    {
        return password_hash($value, PASSWORD_DEFAULT);
    }

    public static function check(string $password, string $hashPassword): bool
    {
        return password_verify($password, $hashPassword);
    }
}
