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
        Schema::create('future_capital_expenses', function (Blueprint $table) {
            $table->id();
            $table->string('ProjectID')->nullable();
            $table->string('Year')->nullable();
            $table->string('Month')->nullable();
            $table->string('Hardware')->nullable();
            $table->string('HardwareIT')->nullable();
            $table->string('HardwareGencap')->nullable();
            $table->string('Software')->nullable();
            $table->string('SoftwareIT')->nullable();
            $table->string('SoftwareGencap')->nullable();
            $table->string('ExternalLabourGencap')->nullable();
            $table->string('ExternalLabourNetwork')->nullable();
            $table->string('ExternalLabourIT')->nullable();
            $table->string('InternalCapitalizedLabourNetwork')->nullable();
            $table->string('InternalCapitalizedLabourIT')->nullable();
            $table->string('InternalCapitalizedLabourGencap')->nullable();
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
        Schema::dropIfExists('future_capital_expenses');
    }
};
