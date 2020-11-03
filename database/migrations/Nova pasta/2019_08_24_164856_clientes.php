<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('clientes', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->bigInteger('user_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('users');
        $table->string('nome', 200);
        $table->string('rg', 200); 
        $table->string('cpf', 200);
        $table->string('endereco', 200);
        $table->string('telefone', 200);
        $table->string('email', 200);
        $table->string('observacao', 200);
        $table->string('ativo', 200);
        $table->datetime('created_at');
        $table->datetime('updated_at');
        $table->datetime('datetime');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
