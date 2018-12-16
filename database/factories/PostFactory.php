<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->sentence,
        'slug' => $faker->unique()->sentence,
        'content' => $faker->text(20000),
    ];
});
