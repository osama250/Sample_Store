<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profile_users')->insert( [
            [
                'adress'  =>  'Giza-Alharm' ,
                'phone'   =>  '01092607753' ,
                'gender'  =>  'Male' ,
                'city'    =>  'Giza' ,
                'user_id' =>  1
            ] ,
            [
                'adress'  =>  'Cairo-Almadia' ,
                'phone'   =>  '011250026626' ,
                'gender'  =>  'Male' ,
                'city'    =>  'Cairo' ,
                'user_id' =>  2
            ] ,
            [
                'adress'  =>  'Cairo-Almadia' ,
                'phone'   =>  '011250026626' ,
                'gender'  =>  'Male' ,
                'city'    =>  'Cairo' ,
                'user_id' =>  3
            ] ,
            [
                'adress'  =>  'Cairo-Almadia' ,
                'phone'   =>  '011250026626' ,
                'gender'  =>  'Femele' ,
                'city'    =>  'Cairo' ,
                'user_id' =>  4
            ]
        ]);
    }
}
