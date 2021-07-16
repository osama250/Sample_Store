<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('types')->insert( [
            [
                'size'   => 'mini' ,
                'color'  => 'green'
            ] ,
            [
                'size'   => 'mini' ,
                'color'  => 'blue'
            ] ,
            [
                'size'   => 'mini' ,
                'color'  => 'red'
            ]
        ]);


        DB::table('prodcut_type')->insert( [
            [
                'prodcut_id'     => 1 ,
                'type_id'        => 1
            ] ,
            [
                'prodcut_id'     => 1 ,
                'type_id'        => 2

            ] ,
            [
                'prodcut_id'     => 1 ,
                'type_id'        => 3
            ]
        ]);

    }
}
