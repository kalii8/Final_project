<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributeLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_levels', function (Blueprint $table) {
            $table->integer('level');
            $table->integer('attribute_id');
            $table->string('name')->nullable();
            $table->integer('min')->nullable();
            $table->integer('max')->nullable();
            $table->primary(['level', 'attribute_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attribute_levels');
    }
}

