<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert( [
            [
                'name'           =>  'Men’s' ,
                'description'    =>  'Have Many Clothes About Men’s ' ,
            ] ,
            [
                'name'           =>  'Women’s' ,
                'description'    =>  'Have Many Clothes About Women’s' ,
            ] ,
            [
                'name'           =>  'Kid’s' ,
                'description'    =>  'Have Many Clothes About Kid’s' ,
            ] ,
            [
                'name'           =>  'Phones'  ,
                'description'    =>  'Have Many Phones And More Types' ,
            ] ,
            [
                'name'           =>  'Electronics'  ,
                'description'    =>  'Have Many Devices' ,
            ]

        ]);
    }
}
