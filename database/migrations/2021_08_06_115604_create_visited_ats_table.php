<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitedAtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visited_ats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('visitor_id')->nullable()->constrained();
            $table->foreignId('establishment_id')->nullable()->constrained();
            $table->dateTime('entered_at');
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
        Schema::dropIfExists('visited_ats');
    }
}
