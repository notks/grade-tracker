<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Grade;
use Faker\Generator as Faker;
use App\User;

$factory->define(Grade::class, function (Faker $faker) {
    return [
        'grade'=>rand(1,5),
        'subject_id'=>rand(1,13),
        'user_id'=>rand(1,20)
    ];
});
