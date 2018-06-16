<?php

use Faker\Generator as Faker;

use App\Message;

$factory->define(Message::class, function (Faker $faker) {
	return [
		'from' => $faker->name,
		'body' => $faker->text(255),
	];
});
