<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::query()->insert([
            [
                User::FIELD_LOGIN   => 'test',
                User::FIELD_PASSWORD    => 'test',
                User::FIELD_EMAIL   => 'test@test.ru',
            ],
            [
                User::FIELD_LOGIN   => 'admin',
                User::FIELD_PASSWORD    => 'password',
                User::FIELD_EMAIL   => 'test@test.ru',
                User::FIELD_ISADMIN => true,
            ],
        ]);
    }
}
