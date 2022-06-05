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
        Schema::create('marriage_contracts', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('husband', '255');
            $table->string('husband_name', '255');
            $table->string('husband_flat_address', '400');
            $table->string('husband_car_model', '255');
            $table->string('husband_car_engine_number', '255');
            $table->string('husband_car_register', '100');
            $table->string('husband_garage', '100')->nullable(true);
            $table->string('wife_name', '255');
            $table->string('wife_property_1', '255');
            $table->string('wife_property_2', '255')->nullable(true);
            $table->string('wife_property_3', '255')->nullable(true);
            $table->string('wife_property_4', '255')->nullable(true);
            $table->string('husband_passport_series', '3');
            $table->string('husband_issued', '255');
            $table->string('husband_issued_address', '255');
            $table->string('wife_passport_series', '2');
            $table->string('wife_issued_address', '2');
            $table->string('wife_issued', '2');
            $table->integer('husband_flat');
            $table->integer('husband_car_engine_body');
            $table->float('sum');
            $table->bigInteger('husband_passport_number');
            $table->bigInteger('wife_passport_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marriage_contracts');
    }
};
