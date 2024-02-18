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
        Schema::dropIfExists('article_fantasy');

        Schema::table('articles', function (Blueprint $table) {
            $table->unsignedBigInteger('fantasy_id')->nullable();
            $table->foreign('fantasy_id')
                ->references('id')
                ->on('fantasies')
                ->onDelete('cascade');
        });
    }
};
