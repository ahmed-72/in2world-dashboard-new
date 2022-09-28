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
        Schema::create('content_blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->json('name');
            $table->json('details');
            $table->json('keywords');
            $table->json('content');
            $table->enum('status',['active','disactive','homePage']);
            $table->integer('likes')->default(0);
            $table->integer('disLikes')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_blogs');
    }
};
