<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProdcutType extends Migration
{

    public function up()
    {
        Schema::create('prodcut_type', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('prodcut_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->timestamps();

            $table->foreign('prodcut_id')->references('id')->on('prodcuts')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('type_id')->references('id')->on('types')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('prodcut_type');
    }
}
