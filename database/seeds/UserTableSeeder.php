<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert( [
            [
                'name'        =>'Osama' ,
                'email'       => 'osama@yahoo.com',
                'password'    =>  Hash::make('aaaassss'),
                'is_admin'    =>  1
           ] ,
           [
                'name'        => 'Ahmed' ,
                'email'       => 'ahmed@yahoo.com',
                'password'    =>  Hash::make('zzzzxxxx'),
                'is_admin'    =>  0
           ] ,
           [
                'name'        => 'Ali' ,
                'email'       => 'Ali@yahoo.com',
                'password'    =>  Hash::make('zzzzxxxx'),
                'is_admin'    =>  0
           ] ,
           [
                'name'        => 'Sara' ,
                'email'       => 'sara@yahoo.com',
                'password'    =>  Hash::make('zzzzxxxx'),
                'is_admin'    =>  0
           ]  ,
           [
               'name'        => 'mohamed' ,
               'email'       => 'mohamed@yahoo.com',
               'password'    =>  Hash::make('mmmmvvvv'),
               'is_admin'    =>  1
          ]
        ]);
    }
}
