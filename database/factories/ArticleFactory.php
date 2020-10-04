<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'judul' => $faker->sentence(),
        'slug' => $faker->word(),
        'body' => $faker->realText(2000),
        'image' => $faker->image('public/images', 800, 600, null, false),
    ];
});
