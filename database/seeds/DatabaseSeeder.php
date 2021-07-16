<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call( [

            UserTableSeeder::class ,
            ProfileUserTableSeeder::class ,
            CategoryTableSeeder::class ,
            ProdcutTableSeeder::class ,
            ReviewsTableSeeder::class ,
            TypesTableSeeder::class ,
            OrderProductTableSeeder::class
        ]);
    }
}
