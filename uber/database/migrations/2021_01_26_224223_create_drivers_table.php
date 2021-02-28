<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->unsignedBigInteger('id');          
            $table->foreign('id')->references('id')->on('users');
            $table->string('photo_path',255)->nullable();
            $table->date('hire_date',255)->nullable();
            $table->integer('total_rides')->default(0);
            $table->string('bank_account',20);
            $table->string('rating');
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
            // Las dos líneas anteriores equivalen a la siguiente
            // $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('drivers');
    }
}
