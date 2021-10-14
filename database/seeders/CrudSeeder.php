<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class CrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cruds')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'phone' => '01712345678',
            'address' => 'Mohammadpur,Dhaka,Bangladesh',
        ]);
        DB::table('cruds')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'phone' => '01741345678',
            'address' => 'Dhanmondi,Dhaka,Bangladesh',
        ]);
         DB::table('cruds')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'phone' => '01912345678',
            'address' => 'Mirpur,Dhaka,Bangladesh',
        ]);
        DB::table('cruds')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'phone' => '01842456744',
            'address' => 'Savar,Dhaka,Bangladesh',
        ]);
        DB::table('cruds')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'phone' => '01944556747',
            'address' => 'Shamoly,Dhaka,Bangladesh',
        ]);
    }
}
