<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker)
{

	$type = [
		'funcionario',
		'aluno'
	];
	
    return [
        'nome' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => Hash::make('123'), // secret
        'type' => $type[rand(0,count($type)-1)],
        'matricula' => str_random(11),
        'remember_token' => str_random(10),
    ];
});
