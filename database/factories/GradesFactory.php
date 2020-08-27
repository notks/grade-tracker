<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Grade;
use Faker\Generator as Faker;
use App\User;
use Carbon\Carbon;

$factory->define(Grade::class, function (Faker $faker) {
    return [
        'grade'=>rand(1,5),
        'module'=>rand(1,4),
        'year'=>4,
        'subject_id'=>rand(1,13),
        'user_id'=>rand(1,20),
        'date'=>now()

    ];
});
