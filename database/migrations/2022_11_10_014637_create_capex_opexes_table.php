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
        Schema::create('capex_opexes', function (Blueprint $table) {
            $table->id();
            $table->string('CapexOpexID')->nullable();
            $table->string('CAPEXAvoidanceSavingsYr1')->nullable();
            $table->string('CAPEXAvoidanceSavingsYr2')->nullable();
            $table->string('CAPEXAvoidanceSavingsYr3')->nullable();
            $table->string('OPEXSavingsYr1')->nullable();
            $table->string('OPEXSavingsYr2')->nullable();
            $table->string('OPEXSavingsYr3')->nullable();
            $table->string('CostAvoidanceYr1')->nullable();
            $table->string('CostAvoidanceYr2')->nullable();
            $table->string('CostAvoidanceYr3')->nullable();
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
        Schema::dropIfExists('capex_opexes');
    }
};
