<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePontosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pontos', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('id_usuario');
            $table->uuid('id_local');
            $table->enum('tipo', ['credito', 'debito']);
            $table->enum('material', ['metal',
                                      'plastico',
                                      'vidro',
                                      'papel',
                                      'oleo',
                                      'baterias',
                                      'lampadas']);
            $table->double('peso', 3, 3)->nullable();
            $table->integer('quantidade')->nullable();
            $table->timestamps();

            $table->primary('id');
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_local')->references('id')->on('locais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pontos');
    }
}
