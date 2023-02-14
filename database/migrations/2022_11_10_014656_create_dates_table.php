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
        Schema::create('dates', function (Blueprint $table) {
            $table->id();
            $table->string('DateID')->nullable();
            $table->string('CASubmissionTargetDate')->nullable();
            $table->string('ScopingCAApprovalDate')->nullable();
            $table->string('SteerCoDate')->nullable();
            $table->string('PreSteerCoDecision')->nullable();
            $table->string('CAMDate')->nullable();
            $table->string('SteerCoDecision')->nullable();
            $table->string('CAApprovalDate')->nullable();
            $table->string('CAApprovalComments')->nullable();
            $table->string('BudgetYear')->nullable();
            $table->string('Comments')->nullable();
            $table->string('Status')->nullable();
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
        Schema::dropIfExists('dates');
    }
};
