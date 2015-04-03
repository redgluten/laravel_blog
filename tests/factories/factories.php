<?php

$factory('App\User', [
	'name'     => $faker->userName,
	'email'    => $faker->email,
	'password' => 'toto',
]);

$factory('App\Post', [
    'title'   => $faker->sentence,
    'content' => $faker->paragraphs(),
    'user_id' => 'factory:App\User',
]);