<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->id('id_cliente');
            $table->string('nome',250);
            $table->string('username',250)->nullable();
            $table->string('email',250)->unique()->nullable();
            $table->text('link_drive');
            $table->string('arquivo',250);
            $table->string('data',250);
            $table->string('status',250);
            $table->string('senha',250);
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
        Schema::dropIfExists('clientes');
    }
}
