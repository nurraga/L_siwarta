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
            'id_skpd' => 1,
            'nm_user' => 'Administrator',
            'kontak' => '075326237',
            'email' => 'admin@email.com',
            'username' => 'admin',
            'password' => bcrypt('password'),

        ]);
    }
}
