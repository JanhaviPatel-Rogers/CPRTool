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
        Schema::create('i_t__non_o_t_l__actuals', function (Blueprint $table) {
            $table->id();
            $table->string('Jan')->nullable();
            $table->string('Feb')->nullable();
            $table->string('Mar')->nullable();
            $table->string('Apr')->nullable();
            $table->string('May')->nullable();
            $table->string('Jun')->nullable();
            $table->string('Jul')->nullable();
            $table->string('Aug')->nullable();
            $table->string('Sep')->nullable();
            $table->string('Oct')->nullable();
            $table->string('Nov')->nullable();
            $table->string('Dev')->nullable();
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
        Schema::dropIfExists('i_t__non_o_t_l__actuals');
    }
};
