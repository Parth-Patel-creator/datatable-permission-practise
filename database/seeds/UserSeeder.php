<?php

use App\User;
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
        $user = User::create([
            'name' => 'parth',
            'email' => 'parth@test.net',
            'password' => bcrypt('parth123')
        ]);

        $user->assignRole('admin');

        $user = User::create([
            'name' => 'mohil',
            'email' => 'mohil@test.net',
            'password' => bcrypt('parth123')
        ]);

        $user->assignRole('writer');

        $user = User::create([
            'name' => 'maulik',
            'email' => 'maulik@test.net',
            'password' => bcrypt('parth123')
        ]);

        $user->assignRole('editor');
    }
}
