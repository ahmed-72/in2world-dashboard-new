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
        Schema::create('starred_projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->json('name');
            $table->json('details');
            $table->string('url')->default(null);
            $table->enum('status',['active','disactive','homePage']);
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
        Schema::dropIfExists('starred_projects');
    }
};
