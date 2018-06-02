<?php

use Faker\Generator as Faker;

$factory->define(App\Match::class, function (Faker $faker) {
    return [
        'name' => substr($faker->sentence(2), 0, -1),
        'next' => rand(1,2),
        'winner' => 0, 
        'board' => '0,0,0,0,0,0,0,0,0',
    ];
});
