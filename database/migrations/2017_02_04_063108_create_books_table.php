<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('title');
            $table->string('synopsis',255);
            $table->string('author');
            $table->integer('edition');
            $table->boolean('type');
            $table->boolean('status');
            $table->string('image',255);
            $table->integer('copies');
            $table->string('genre');
            $table->timestamps();
            //$table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
