<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'alanaasmaa',
            'email' => 'alanaasmaa@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
