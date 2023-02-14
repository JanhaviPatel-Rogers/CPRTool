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
        Schema::create('opex_infos', function (Blueprint $table) {
            $table->id();
            $table->string('OpexInfoID')->nullable();
            $table->string('Date')->nullable();
            $table->string('OpexDragCurrentYear')->nullable();
            $table->string('OpexDragFutureYear')->nullable();
            $table->string('OpexDragAfterFutureYear')->nullable();
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
        Schema::dropIfExists('opex_infos');
    }
};
