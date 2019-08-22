<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Juan',
        	'email' => 'juan.12@gmail.com',
        	'password' => bcrypt('123123')
        ]);
    }
}
