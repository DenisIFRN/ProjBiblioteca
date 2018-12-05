<?php

use Faker\Generator as Faker;
use App\Emprestimo;

$factory->define(App\Historico::class, function (Faker $faker) {
    
    $count = App\Emprestimo::count();
    $emprestimo = App\Emprestimo::find(rand(1, $count));

    $idUsario = $emprestimo->id_usuario;
    $idLivro = $emprestimo->id_livro;

    $dtEmprestimo = $emprestimo->dataEmprestimo;
    $dtDevolucao = $emprestimo->dataDevolucao;
    return [
        'dataEmprestimo' => $dtEmprestimo,
        'dataDevolucao' => $dtDevolucao,
        'id_usuario' => $idUsario,
        'id_livro' => $idLivro
    ];
});
