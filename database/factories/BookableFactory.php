<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bookable;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$suffix = [
    'Villa',
    'House',
    'Cottage',
    'Luxury Villas',
    'Cheap House',
    'Rooms',
    'Cheap Rooms',
    'luxury Rooms',
    'Fancy Rooms'
];

// php artisan make:factory BookableFactory --model=Bookable
$factory->define(Bookable::class, function (Faker $faker) use ($suffix) {
    return [
        'title' => $faker->city . ' ' . Arr::random($suffix),
        'description' => $faker->text()

    ];
});
