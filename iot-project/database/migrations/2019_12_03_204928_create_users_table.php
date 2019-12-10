<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('username')->unique();
            $table->bigInteger('value_water')->default('0');
            $table->bigInteger('threshold_water')->default('2500');
            $table->dateTime('value_plants')->nullable();
            $table->bigInteger('threshold_plants')->default('2');
            $table->bigInteger('value_coffee')->nullable();
            $table->bigInteger('threshold_coffee')->default('5');
            $table->bigInteger('value_bike')->nullable();
            $table->bigInteger('threshold_bike')->default('2');      

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
        Schema::dropIfExists('users');
    }
}
