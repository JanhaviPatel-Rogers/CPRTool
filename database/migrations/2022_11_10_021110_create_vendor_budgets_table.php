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
        Schema::create('vendor_budgets', function (Blueprint $table) {
            $table->id();
            $table->string('VendorBudgetID')->nullable();
            $table->string('ProjectID')->nullable();
            $table->string('VendorID')->nullable();
            $table->string('Hardware')->nullable();
            $table->string('Software')->nullable();
            $table->string('ExternalLabour')->nullable();
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
        Schema::dropIfExists('vendor_budgets');
    }
};
