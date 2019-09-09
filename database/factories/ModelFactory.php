<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\ReservationItem::class, function (Faker\Generator $faker) {
    return [
        'reservation_id' => $faker->sentence,
        'account_type' => 'ROOM',
        'master_id' => $faker->sentence,
        'arrival' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'nights' => $faker->randomDigit,
        'departure' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'room_number' => $faker->randomDigit,
        'client_type' => 'person',
        'client_name' => $faker->name,
        'agency_name' => $faker->name,
        'agency_contact' => $faker->name,
        'guest1' => $faker->name,
        'guest2' => $faker->name,
        'guest_count' => $faker->randomDigit,
        'adults' => $faker->randomDigit,
        'children' => $faker->randomDigit,
        'type' => 'reservation',
        'remarks' => $faker->paragraph,
        'date_created' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'date_modified' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'signature_created' => $faker->name,
        'signature_modified' => $faker->name,
        'status' => 'staying',
        'deleted' => '0',
        'actual_arrival' => $faker->dateTime($max = 'now', $timezone = null),
        'actual_departure' => $faker->dateTime($max = 'now', $timezone = null),
        'last_room_charge' => $faker->dateTime($max = 'now', $timezone = null),
        'last_account_close' => $faker->dateTime($max = 'now', $timezone = null)
    ];
});
