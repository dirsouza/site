<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubMenuSiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_menu_site', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('menu_site_id');
            $table->foreign('menu_site_id')->references('id')->on('menu_site')->onDelete('cascade');
            $table->string('titulo', 50);
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
        Schema::dropIfExists('sub_menu_site');
    }
}
