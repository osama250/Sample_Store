<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderProductTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('prodcut_user')->insert( [
            [
                'user_id'        => 1 ,
                'prodcut_id'     => 1
            ] ,
            [
                'user_id'        => 1 ,
                'prodcut_id'     => 4

            ] ,
            [
                'user_id'        => 2 ,
                'prodcut_id'     => 2
            ] ,
            [
                'user_id'        => 2 ,
                'prodcut_id'     => 3
            ] ,
            [
                'user_id'        => 3 ,
                'prodcut_id'     => 3
            ]
        ]);
    }
}
