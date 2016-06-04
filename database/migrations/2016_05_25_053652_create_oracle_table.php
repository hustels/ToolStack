<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOracleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oracle', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date');
            $table->string('db');
            $table->string('host')->nullable();
            $table->string('type');
            $table->string('last_bk');
            $table->string('num_failed_bk');
            $table->string('retried');
            $table->string('status');
            $table->string('link');
            $table->text('observation');
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
        Schema::drop('oracle');
    }
}
