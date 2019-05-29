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
        $this->call([
        usersTableSeeder::class,
        roomtypesTableSeeder::class,
        roomsTableSeeder::class,
        customertypesTableSeeder::class,
        customersTableSeeder::class,
        foodtypesTableSeeder::class,
        foodsTableSeeder::class,
        reservationsTableSeeder::class,
        ordersTableSeeder::class,
        slidesTableSeeder::class,
        cashiersTableSeeder::class,
        billsTableSeeder::class,    
        bill_food_ordersTableSeeder::class
    ]);
    }
}
