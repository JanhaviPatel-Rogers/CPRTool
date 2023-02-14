<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decommissions', function (Blueprint $table) {
            $table->id();
            $table->string('DecommissionID')->nullable();
            $table->string('ProjectID')->nullable();
            $table->string('Year')->nullable();
            $table->string('Quarter')->nullable();
            $table->string('InternalLabour')->nullable();
            $table->string('ExternalLabour')->nullable();
            $table->string('EstimatedSaving')->nullable();
            $table->string('NumberOfPlatform')->nullable();
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
        Schema::dropIfExists('decommissions');
    }
};
