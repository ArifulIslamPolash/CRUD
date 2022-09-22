<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CrudTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($count=0;$count<10;$count++){
            DB::table('cruds')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'phone'  => Str::random(10),
                'address'  => Str::random(100),
                'city'  => Str::random(10),
                // 'body'  => Str::random(100),
                'updated_at' => date("Y-m-d H:i:s"),
                'created_at' => date("Y-m-d H:i:s"),

            ]);
        }
    }
}
