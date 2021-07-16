<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('reviews')->insert( [
            [
                'content'       => 'Iphone X Is Very Good' ,
                'user_id'       =>  2 ,
                'prodcut_id'    =>  2
            ] ,
            [
                'content'       => 'Iphone 12 Have Good Camera' , 
                'user_id'       =>  2 , 
                'prodcut_id'    =>  1
            ] ,
            [
                'content'       => 'Laptop Is Very Good And Have many feautre' ,
                'user_id'       =>  1 , 
                'prodcut_id'    =>  4
            ] ,
            [
                'content'       => 'I Hope Buy Iphone12' , 
                'user_id'       =>  1 , 
                'prodcut_id'    =>  1
            ] ,
            [
                'content'       => 'I Hope Buy Iphone11' , 
                'user_id'       =>  3 ,
                'prodcut_id'    =>  2
            ]
        ]);
    }
}
