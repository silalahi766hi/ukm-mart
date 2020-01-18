<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Product', function (Blueprint $table) {
            $table->increments('Id_product');
            $table->string('Nama_product',255);
            $table->integer('Id_category');
            $table->string('User_name',50);
            $table->integer('Stock');
            $table->bigInteger('Harga');
            $table->string('Deskripsi',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Product');
    }
}
