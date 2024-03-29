<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('adentitle', 30)->default('');
            $table->string('adcntitle', 51)->default('');
            $table->string('adimg', 255)->default('');
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
        Schema::dropIfExists('advers');
    }
}
