<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('VictimName');
            $table->string('VictimNumber');
            $table->string('FraudName')->nullable();
            $table->string('FraudNumber');
            $table->string('Screenshot')->nullable();
            $table->string('identify');
            $table->string('date');
            $table->string('time');
            $table->string('summary');
            $table->string('creator')->unique();
            $table->tinyInteger('Is_approve')->default('0');
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
        Schema::dropIfExists('forms');
    }
}
