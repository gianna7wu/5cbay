<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::enableForeignKeyConstraints();
      Schema::create('posts', function (Blueprint $table) {
        $table->integer('pID')->unsigned();
        $table->integer('buyer')->unsigned();
        $table->integer('seller')->unsigned();
        $table->foreign('pID')
              ->references('productID')->on('products');
        $table->timestamps();
        $table->boolean('sold');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
