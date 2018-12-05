<?php

use Faker\Generator as Faker;

$factory->define(App\Livro::class, function (Faker $faker) {

	$autor = [
		'autor1',
		'autor2',
		'autor3'
	];

	$genero = [
		'acao',
		'terror',
		'romance',
		'aventura'
	];

	$editora = [
		'editora1',
		'editora2',
		'editora3'
	];

	$situacao = [
		'disponivel',
		'indisponivel'
	];
    return [
        'nome' => $faker->name,
        'autor' => $autor[rand(0,count($autor)-1)],
        'genero' => $genero[rand(0,count($genero)-1)],
        'dataLancamento' => $faker->date,
        'editora' => $editora[rand(0,count($editora)-1)],
        'totPaginas' => rand(1, 300),
        'situacao' => $situacao[rand(0,count($situacao)-1)]
    ];
});
