<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->string('beneficiario', 100);
            $table->string('ci', 100);
            $table->string('telefono', 100);
            $table->string('barrio', 100);
            $table->string('zona', 100);
$table->integer('distrito_id')->unsigned();
$table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('formularios');
    }
}
