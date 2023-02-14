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
        Schema::create('year_one_breakdowns', function (Blueprint $table) {
            $table->id();
            $table->string('YearOneBreakdownID')->nullable();
            $table->string('Date')->nullable();
            $table->string('Labour2020')->nullable();
            $table->string('HW2020')->nullable();
            $table->string('SW2020')->nullable();
            $table->string('ProfServ2020')->nullable();
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
        Schema::dropIfExists('year_one_breakdowns');
    }
};
