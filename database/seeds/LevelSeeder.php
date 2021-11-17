<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $level = [
            [
                'id' => '1',
                'name' => 'admin'
            ],
            [
                'id' => '2',
                'name' => 'kurir'
            ],
            [
                'id' => '3',
                'name' => 'manager'
            ]
        ];

        DB::table('level')->insert($level);
    }
}
