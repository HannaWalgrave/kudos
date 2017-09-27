<?php

use Faker\Generator as Faker;

$factory->define(App\Compliment::class, function (Faker $faker) {

    $user_id = App\User::pluck('id');

    return [
        'message' => $faker->text($maxNbChars = 200),
        'id_receiver'=> $user_id->random(),
        'id_sender' => $user_id->random(),

    ];
});
