<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Feedback', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longText('Feedback')->nullable();


            $table->unsignedBigInteger('OrganizationFeedback_id');
            $table->foreign('OrganizationFeedback_id')->references('id')->on('Organization')->onDelete('cascade');

            $table->unsignedBigInteger('VoulnteerFeedback_id');
            $table->foreign('VoulnteerFeedback_id')->references('id')->on('Voulnteer')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Feedback');
    }
}
