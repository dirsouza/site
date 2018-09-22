<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubMenuSiteItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_menu_site_items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sub_menu_site_id');
            $table->foreign('sub_menu_site_id')->references('id')->on('sub_menu_site')->onDelete('cascade');
            $table->string('titulo', 50)->unique();
            $table->string('url', 100)->unique();
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
        Schema::dropIfExists('sub_menu_site_items');
    }
}
