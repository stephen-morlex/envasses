<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    $title = $faker->sentence;
    $slug = str_slug($title, '-');

    return [
        'title' => $title,
        'slug' => $slug,
        'image' => $faker->image(),
        'body' => $faker->paragraph(3)
    ];
});