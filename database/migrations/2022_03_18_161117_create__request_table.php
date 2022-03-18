<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Request', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('RequestType');
			$table->string('RequestLocation');

            $table->unsignedBigInteger('OrganizationReq_id');
            $table->foreign('OrganizationReq_id')->references('id')->on('Organization')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Request');
    }
}
