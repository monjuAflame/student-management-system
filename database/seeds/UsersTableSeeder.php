<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        User::create([
            'role_id' => 1,
            'active' => 1,
            'name' => 'monjuAflame',
            'username' => 'monju',
            'email' => 'monjuaflame@gmail.com',
            'password' => bcrypt('monju'),
            'remember_token' => str_random(10),
        ]);
    }

}
