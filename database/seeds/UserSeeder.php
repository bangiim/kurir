<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin Role',
                'email' => 'admin@role.test',
                'password' => Hash::make('admin1234'),
                'level_id' => '1'
            ],

            [
                'name' => 'Kurir Role',
                'email' => 'kurir@role.test',
                'password' => Hash::make('kurir1234'),
                'level_id' => '2'
            ],

            [
                'name' => 'Manager Role',
                'email' => 'manager@role.test',
                'password' => Hash::make('manager1234'),
                'level_id' => '3'
            ]
        ];

        DB::table('users')->insert($user);
    }
}
