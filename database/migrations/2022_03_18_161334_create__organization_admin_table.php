<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Organization_admin', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('AdminOrganization_id');
            $table->foreign('AdminOrganization_id')->references('id')->on('Organization')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Organization_admin');
    }
}
