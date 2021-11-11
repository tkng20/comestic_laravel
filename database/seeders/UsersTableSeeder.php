<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        $data = array(
            //admin
            array(
                'fullname' => 'Employee',
                'username' => 'Employee',
                'email' => 'employee@gmail.com',
                'password' => Hash::make('employee'),
                'role' => 'employee',
                'status' => 'active'
            ),
            //user
            array(
                'fullname' => 'Customer',
                'username' => 'Customer',
                'email' => 'customer@gmail.com',
                'password' => Hash::make('customer'),
                'role' => 'customer',
                'status' => 'active'
            ),
        );

        DB::table('users')->insert($data);
    }
}
