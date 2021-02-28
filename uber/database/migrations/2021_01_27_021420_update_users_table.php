<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function (Blueprint $table) {
         $table->string('address', 255)->after('password')->nullable();
         $table->string('mobile', 20)->after('address');
         $table->string('type', 1)->after('mobile')->default('N'); // N: None; C: Customer; D: Driver; A: All
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('users', function (Blueprint $table) {
         $table->dropColumn('address');
         $table->dropColumn('mobile');
         $table->dropColumn('type');  
      });
    }
}
