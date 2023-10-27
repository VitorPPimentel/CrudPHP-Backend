<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use Faker\Factory as Faker;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create();
        User::create([
            'name'      => 'tester1',
            'email'     => $faker->unique()->safeEmail,
            'password'  => 'tester1'
        ]);
        User::create([
            'name'      => 'tester2',
            'email'     => $faker->unique()->safeEmail,
            'password'  => 'tester2'
        ]);
        User::create([
            'name'      => 'tester3',
            'email'     => $faker->unique()->safeEmail,
            'password'  => 'tester3'
        ]);
    }
}
