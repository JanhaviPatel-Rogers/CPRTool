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
        Schema::create('decoms', function (Blueprint $table) {
            $table->id();
            $table->string('DecomID')->nullable();
            $table->string('Date')->nullable();
            $table->string('Decom_Flag')->nullable();
            $table->string('ExternalLabour')->nullable();
            $table->string('InternalLabour')->nullable();
            $table->string('GrossSavings')->nullable();
            $table->string('NumberofPlatformsToDecom')->nullable();
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
        Schema::dropIfExists('decoms');
    }
};
