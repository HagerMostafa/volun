<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoulnteerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Voulnteer', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Medical_info');
			$table->bigInteger('User_id');

            $table->unsignedBigInteger('VolunUser_id');
            $table->foreign('VolunUser_id')->references('id')->on('User')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Voulnteer');
    }
}
