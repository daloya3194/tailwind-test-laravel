<?php

namespace App\Services;

use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Self_;

class PhoneBook
{
    public static function searchByName(string $name): array
    {
        return self::searchBy('name', $name);
    }

    public static function searchByCity(string $city): array
    {
        return self::searchBy('city', $city);
    }

    public static function searchByEmail(string $email): array
    {
        return self::searchBy('email', $email);
    }

    public static function searchBy(string $key, string $value): array
    {
        return collect(self::contacts())
            ->filter(function ($contact) use ($key, $value) {
                return Str::contains(strtolower($contact[$key]), strtolower($value));
            })->all();
    }

    public static function contacts(): array
    {
        return [
            [
                'name' => 'John Doe',
                'email' => 'johndoe@yahoo.de',
                'phone' => '123456789',
                'city' => 'Quebec, CA'
            ]
            ,
            [
                'name' => 'Jane Doe 2',
                'email' => 'jane@yahoo.de2',
                'phone' => '987654321',
                'city' => 'Douala, CA2'
            ],
            [
                'name' => 'Alice Doe 3',
                'email' => 'johndoe@yahoo.de3',
                'phone' => '1234567893',
                'city' => 'Yaounde, CA3'
            ],
            [
                'name' => 'Junior 4',
                'email' => 'junior@yahoo.de4',
                'phone' => '1234567894',
                'city' => 'Bangangté, CA4'
            ],
            [
                'name' => 'Kadou 5',
                'email' => 'kadou@yahoo.de5',
                'phone' => '1234567895',
                'city' => 'Montreal, CA5'
            ],
            [
                'name' => 'Cho gar',
                'email' => 'chogar@yahoo.de5',
                'phone' => '1234567895',
                'city' => 'Manfe, CA5'
            ],
        ];
    }
}
