<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdcutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prodcuts')->insert( [
            [
                'name'         =>  'Iphone 12'  ,
                'content'      =>  'Have Many Feature' ,
                'price'        =>  '1000$' ,
             //   'photo'        =>  file_get_contents('uploads/apple12.jpg'),
                'category_id'  =>  4
            ] ,
            [
                'name'         =>  'Iphone X'  ,
                'content'      =>  'Have Many Feature' ,
                'price'        =>  '800$' ,
                'category_id'  =>  4
            ] ,
            [
                'name'         =>  'Tshirt'  ,
                'content'      =>  'Have Good Materail' ,
                'price'        =>  '20$' ,
                'category_id'  =>  1
            ] ,
            [
                'name'         =>  'Laptop Mac'  ,
                'content'      =>  'Have Many Feature And Very Good For Performence' ,
                'price'        =>  '3000$' ,
                'category_id'  =>  5
            ]
        ]);

    }
}
