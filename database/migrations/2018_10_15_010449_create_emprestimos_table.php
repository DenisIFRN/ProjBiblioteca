<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmprestimosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('diasAlocado');
            $table->string('situacao');
            $table->date('dataEmprestimo');
            $table->date('dataDevolucao');
            $table->unsignedInteger('id_usuario');
            $table->unsignedInteger('id_livro');

            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_livro')->references('id')->on('livros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emprestimos');
    }
}
