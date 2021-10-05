<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'full_name'=>'Nguyen Duc',
                'username'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('123123'),
                'role'=>'admin',
                'status'=>'active',
            ],
            [
                'full_name'=>'Nguyen Duc Vendor',
                'username'=>'Vendor',
                'email'=>'Vendor@gmail.com',
                'password'=>Hash::make('123123'),
                'role'=>'vendor',
                'status'=>'active',
            ],
            [
                'full_name'=>'Nguyen Duc Customer',
                'username'=>'Customer',
                'email'=>'Customer@gmail.com',
                'password'=>Hash::make('123123'),
                'role'=>'customer',
                'status'=>'active',
            ],
        ]);
    }
}
