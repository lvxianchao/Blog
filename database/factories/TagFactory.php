<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Tag::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement(['PHP', 'Python', 'JavaScript', 'Vue.js', 'Linux', 'Redis', 'MySQL', 'NodeJS', 'HTML', 'CSS']),
    ];
});
