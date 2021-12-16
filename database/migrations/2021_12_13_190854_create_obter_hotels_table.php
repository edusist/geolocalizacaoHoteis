<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObterHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obter_hotels', function (Blueprint $table) {

            $table->increments('id');
            $table->string('nome', 100)->unique();
            $table->string('latitude', 50)->unique();
            $table->string('longitude', 50)->unique();
            $table->decimal('preco', $precision = 10, $scale = 2)->nullable();
            $table->integer('distancia')->nullable();
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
        Schema::dropIfExists('obter_hotels');
    }
}
