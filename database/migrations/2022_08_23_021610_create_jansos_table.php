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
        Schema::create('jansos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tokutyo');
            $table->string('seiketsusa')->nullable();
            $table->integer('huniki')->nullable();
            $table->integer('yasusa')->nullable();
            $table->integer('mataikitai')->nullable();
            $table->string('location')->nullable();
            $table->string('jansougazou')->nullable();
            $table->string('url')->nullable();
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
        Schema::dropIfExists('jansos');
    }
};
