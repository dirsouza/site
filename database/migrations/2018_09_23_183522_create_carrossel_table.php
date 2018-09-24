<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrosselTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrossel', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('produto_id');
            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');
            $table->string('titulo', 50)->unique();
            $table->string('img', 100)->unique();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('carrossel');
    }
}
