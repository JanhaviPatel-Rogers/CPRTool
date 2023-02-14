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
        Schema::create('transfer_updates', function (Blueprint $table) {
            $table->id();
            $table->string('TransfersUpdatesID')->nullable();
            $table->string('Date')->nullable();
            $table->string('ChangeInBudgetDueToPCR')->nullable();
            $table->string('BudgetUpdateMar23')->nullable();
            $table->string('BudgetUpdateApr1')->nullable();
            $table->string('BudgetUpdateLE5')->nullable();
            $table->string('Deferredto2021')->nullable();
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
        Schema::dropIfExists('transfer_updates');
    }
};
