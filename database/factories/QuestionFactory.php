<?php

use App\Question;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Question::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->sentence(rand(5, 10)), "."),
        'body' => $faker->paragraph(rand(3,7), true),
        'views' => rand(0, 10),
        'answers' => rand(0, 10),
        'votes' => rand(-3, 10)
    ];
});
