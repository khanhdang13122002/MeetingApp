<?php

namespace Database\Seeders;

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
        $this->init_data();
    }
    private function init_data(){

        DB::table("users")->insert([
            
            "name"=>"dang duy khanh",
            "email"=>"dangk13122002@gmail.com",
            "password"=>bcrypt("13122002")

        ]);

    }
}
