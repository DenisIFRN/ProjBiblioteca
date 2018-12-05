<?php

use Faker\Generator as Faker;

$factory->define(App\Emprestimo::class, function (Faker $faker) {
    
    $countU = App\User::count();
    $idUsario = App\User::find(rand(1, $countU));

    $countL = App\Livro::count();
    $idLivro = App\Livro::find(rand(1, $countL));

    $situacao = [
    	'emprestado',
    	'atrasado',
    	'devolvido'
    ];

    return [
    	'diasAlocado' => rand(1, 10),
    	'situacao' => $situacao[rand(0,count($situacao)-1)],
        'dataEmprestimo' => $faker->date,
        'dataDevolucao' => $faker->date,
        'id_usuario' => $idUsario,
        'id_livro' => $idLivro
    ];
});
