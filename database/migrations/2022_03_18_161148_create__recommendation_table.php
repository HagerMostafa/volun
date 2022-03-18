<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecommendationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Recommendation', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('RequestRecom_id');
            $table->foreign('RequestRecom_id')->references('id')->on('Request')->onDelete('cascade');

            $table->unsignedBigInteger('VoulnteerRecom_id');
            $table->foreign('VoulnteerRecom_id')->references('id')->on('Voulnteer')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Recommendation');
    }
}
