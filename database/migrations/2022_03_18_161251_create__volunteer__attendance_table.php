<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteerAttendanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Volunteer_Attendance', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('Attend_count');
			$table->bigInteger('Absence_count');

            $table->unsignedBigInteger('VoulnAttend_id');
            $table->foreign('VoulnAttend_id')->references('id')->on('Voulnteer')->onDelete('cascade');

            $table->unsignedBigInteger('VolunQr_code_id');
            $table->foreign('VolunQr_code_id')->references('id')->on('Qr_code')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Volunteer_Attendance');
    }
}
