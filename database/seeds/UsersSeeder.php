<?php

use Illuminate\Database\Seeder;
Use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'user',
            'email'=>'user@gmail.com',
            'password'=>bcrypt('1234')

        ]);
    }
}
