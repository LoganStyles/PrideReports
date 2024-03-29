<?php

use Illuminate\Database\Seeder;

class ReservationItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Let's truncate our existing records to start from scratch.
       ReservationItem::truncate();

       $faker = \Faker\Factory::create();

       // And now, let's create a few articles in our database:
       for ($i = 0; $i < 50; $i++) {
        ReservationItem::create([
               'reservation_id' => $faker->sentence,
               'account_type' => 'ROOM',
               'arrival' => $faker->paragraph,
           ]);
       }
    }
}
