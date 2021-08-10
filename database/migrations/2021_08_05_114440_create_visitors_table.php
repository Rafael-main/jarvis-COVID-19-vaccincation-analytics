<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('suffix_name')->nullable();
            $table->string('gender');
            $table->integer('birth_month');
            $table->integer('birth_day');
            $table->integer('birth_year');
            $table->integer('primary_phone_number');
            $table->integer('secondary_phone_number')->nullable();
            $table->boolean('is_transient')->default(false)->change();
            $table->foreignId('address_id')->nullable()->constrained();
            $table->foreignId('user_id')->nullable()->constrained();
            // House #, Street, Subdivision, Brgy, City/Municipality
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitors');
    }
}
