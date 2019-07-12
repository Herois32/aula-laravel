<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'usr_nome' => 'Carla Cruz',
        	'usr_email' => 'carla.cruz@gamil.com',
        	'usr_password' => bcrypt('123456')
       ]);
    }
}
