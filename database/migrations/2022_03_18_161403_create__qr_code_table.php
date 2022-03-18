<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQrCodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Qr_code', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('Qr_code');

            $table->unsignedBigInteger('Voulnteer_id');
            $table->foreign('Voulnteer_id')->references('id')->on('Voulnteer')->onDelete('cascade');

            $table->unsignedBigInteger('Qr_code_Attend_id');
            $table->foreign('Qr_code_Attend_id')->references('id')->on('Volunteer_Attendance')->onDelete('cascade');

            $table->unsignedBigInteger('Request_id');
            $table->foreign('Request_id')->references('id')->on('Request')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Qr_code');
    }
}
