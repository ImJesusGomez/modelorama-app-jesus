<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // CREATE
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Primary Key / Not Null / AutoIncrement /
            $table->integer('product_number');
            $table->longText('desc');
            $table->text('name');
            $table->text('branch');
            $table->text('price');

            $table->timestamps(); // Fecha Formateada (mms)


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      // BORRAR
        Schema::dropIfExists('products');
    }
};
