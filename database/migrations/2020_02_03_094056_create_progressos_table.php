<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgressosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progressos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('aluno_id');
            $table->foreign('aluno_id')->references('id')->on('users');
            $table->unsignedBigInteger('prog_html');
            $table->foreign('prog_html')->references('prog_curso')->on('conteudos');
            $table->unsignedBigInteger('prog_css');
            $table->foreign('prog_css')->references('prog_curso')->on('conteudos');
            $table->unsignedBigInteger('prog_logica');
            $table->foreign('prog_logica')->references('prog_curso')->on('conteudos');
            $table->unsignedBigInteger('prog_js');
            $table->foreign('prog_js')->references('prog_curso')->on('conteudos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('progressos');
    }
}
