<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'full_name' => 'Admin',
                    'username' => 'admin',
                    'email' => 'admin@gmail.com',
                    'password' => bcrypt('admin'),
                    'photo' => '',
                    'phone' => '',
                    'address' => '',
                    'role' => 'admin',
                    'status' => 'active'
                ],
                [
                    'full_name' => 'Vendor',
                    'username' => 'vendor',
                    'email' => 'vendor@gmail.com',
                    'password' => bcrypt('vendor'),
                    'photo' => '',
                    'phone' => '',
                    'address' => '',
                    'role' => 'vendor',
                    'status' => 'active'
                ],
                [
                    'full_name' => 'Customer',
                    'username' => 'customer',
                    'email' => 'customer@gmail.com',
                    'password' => bcrypt('customer'),
                    'photo' => '',
                    'phone' => '',
                    'address' => '',
                    'role' => 'customer',
                    'status' => 'active'
                ]
            ]
        );
    }
}
