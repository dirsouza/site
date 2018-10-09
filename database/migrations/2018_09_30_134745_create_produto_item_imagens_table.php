<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoItemImagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_item_imagens', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('produto_item_id');
            $table->foreign('produto_item_id')->references('id')->on('produto_itens')->onDelete('cascade');
            $table->string('imagem');
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
        Schema::dropIfExists('produto_item_imagens');
    }
}
