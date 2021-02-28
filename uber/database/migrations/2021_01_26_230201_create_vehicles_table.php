<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('version_id')->constrained();
            $table->foreignId('category_id')->constrained();
            // $table->unsignedBigInteger('category_id');
            // $table->foreign('category_id')->references('id')->on('categories');
            $table->string('plate',15);
            $table->string('color',20);
            $table->smallInteger('seats');
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
        Schema::dropIfExists('vehicles');
    }
}
