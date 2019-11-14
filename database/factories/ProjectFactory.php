<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    $title = $faker->sentence(6);
    $slug = str_slug($title, '-');

    return [
        'title' => $title,
        'slug' => $slug,
        'image' => $faker->image(),
        'body' => $faker->paragraph(3)
    ];
});