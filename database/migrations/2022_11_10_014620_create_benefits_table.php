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
        Schema::create('benefits', function (Blueprint $table) {
            $table->id();
            $table->string('ProjectID')->nullable();
            $table->string('RevenueIncrease2022')->nullable();
            $table->string('RevenueIncrease2023')->nullable();
            $table->string('RevenueIncrease2024')->nullable();
            $table->string('RevenueProtection2022')->nullable();
            $table->string('RevenueProtection2023')->nullable();
            $table->string('RevenueProtection2024')->nullable();
            $table->string('OtherRevenue2022')->nullable();
            $table->string('OtherRevenue2023')->nullable();
            $table->string('OtherRevenue2024')->nullable();
            $table->string('OpexSavings2022')->nullable();
            $table->string('OpexSavings2023')->nullable();
            $table->string('OpexSavings2024')->nullable();
            $table->string('OpexAvoidance2022')->nullable();
            $table->string('OpexAvoidance2023')->nullable();
            $table->string('OpexAvoidance2024')->nullable();
            $table->string('OtherOpexSavings2022')->nullable();
            $table->string('OtherOpexSavings2023')->nullable();
            $table->string('OtherOpexSavings2024')->nullable();
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
        Schema::dropIfExists('benefits');
    }
};
