<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // check if table user is empty
       if(DB::table('users')->count() == 0){

        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$lrAvSZpNoR.jlEZZvL3U5u4iHH4TMTZwcVud5/Di7A2fwuZV7Ped6'
            ],
        ]);

    } else { echo "\e[Uesrs Table is not empty, therefore NOT "; }
    }
}
