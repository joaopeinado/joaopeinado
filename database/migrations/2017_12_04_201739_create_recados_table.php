<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recados', function (Blueprint $table) {
            $table->increments('id_recado');
            $table->string('titulo_recado', 50);
            $table->string('msg_recado', 1000);
            $table->integer('id_remetente')->unsigned();
            $table->timestamps();

            $table->foreign('id_remetente')->references('id_remetente')->on('remetentes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recados');
    }
}
