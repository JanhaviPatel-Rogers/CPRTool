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
        Schema::create('approved_dollars', function (Blueprint $table) {
            $table->id();
            $table->string('ApprovedDollarsID')->nullable();
            $table->string('Date')->nullable();
            $table->string('ScopingCAApproval')->nullable();
            $table->string('SteerCoCAApproval2020Total')->nullable();
            $table->string('Rollerovers2019')->nullable();
            $table->string('TotalApproved2020in2020')->nullable();
            $table->string('Approved2021')->nullable();
            $table->string('Approved2022')->nullable();
            $table->string('FundsNoLongerRequired')->nullable();
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
        Schema::dropIfExists('approved_dollars');
    }
};
