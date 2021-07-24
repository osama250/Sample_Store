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
            ] ,
            [
                'size'   => 'mini' ,
                'color'  => 'Gold'
            ]
        ]);


        DB::table('prodcut_type')->insert( [
            [
                'prodcut_id'     => 1 ,
                'type_id'        => 1
            ] ,
            [
                'prodcut_id'     => 2 ,
                'type_id'        => 4

            ] ,
            [
                'prodcut_id'     => 4 ,
                'type_id'        => 2 
            ]
        ]);

    }
}
