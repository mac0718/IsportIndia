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
        Schema::create('news',function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('created_by');
            $table->integer('views')->default(0);
            $table->integer('likes')->default(0);
            $table->string('title');
            $table->string('slug');
            $table->text('short_description');
            $table->longText('description');
            $table->tinyInteger('status')->default(1);
            $table->string('img');
            $table->integer('min');
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
        Schema::dropIfExists('news');
    }
};
