<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserbasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userbase', function (Blueprint $table) {
            $table->increments('UserID');
            $table->string('Username')->nullable();
            $table->string('Password')->nullable();
            $table->string('Email')->nullable();
            $table->datetime('Birth')->nullable();
            $table->integer('Gender')->default('0')->comment('0 = Male , 1= Female');
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
        Schema::dropIfExists('userbase');
    }
}
