<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'    => 'Joao Marcos',
            'email'    => 'jmbenck@gmail.com',
            'password'   =>  Hash::make('senha'),
            'remember_token' =>  str_random(10),
        ]);
    }
}
