<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoItemOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_item_ofertas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('produto_item_id');
            $table->foreign('produto_item_id')->references('id')->on('produto_itens')->onDelete('cascade');
            $table->double('preco', 10, 2);
            $table->date('validade');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('produto_item_ofertas');
    }
}
