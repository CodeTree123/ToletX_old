<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Admin',
            'email'=>'toletx@gmail.com',
            'Phone'=>'017',
            'password'=>bcrypt('toletx1234'),
            'role_id'=>'1',
        ]);
        User::create([
            'name'=>'Rafsan',
            'email'=>'rafsan@gmail.com',
            'Phone'=>'01',
            'password'=>bcrypt('12'),
            'role_id'=>'2',
        ]);
    
    }
}
