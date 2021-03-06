<?php

namespace app\models;

use core\DbModel;
use core\Hash;

class User extends DbModel
{
    public $email = '';
    public $password = '';
    public $password_confirmation = '';

    public function tableName(): string
    {
        return 'users';
    }

    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL, [
                self::RULE_UNIQUE, 'class' => self::class
            ]],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 255]],
            'password_confirmation' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']],
        ];
    }

    public function attributes(): array
    {
        return ['email', 'password'];
    }

    public function save()
    {
        $this->password = Hash::make($this->password);
        return parent::save();
    }

    public function labels(): array
    {
        return [
            'email' => 'Email',
            'password' => 'Password',
            'password_confirmation' => 'Confirm Password'
        ];
    }
}
