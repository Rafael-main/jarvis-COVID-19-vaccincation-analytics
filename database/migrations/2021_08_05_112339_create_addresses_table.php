<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('country')->nullable();
            $table->string('province')->nullable();
            $table->string('city_or_municipality')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('barangay')->nullable();
            $table->double('longitude')->nullable();
            $table->double('lattitude')->nullable();
            $table->string('current_complete_address');
            $table->string('provincial_complete_address')->nullable();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('address_id')->nullable()->constrained();
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
        Schema::dropIfExists('addresses');
    }
}
