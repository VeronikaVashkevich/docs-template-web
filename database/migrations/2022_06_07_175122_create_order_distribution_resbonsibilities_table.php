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
        Schema::create('order_distribution_responsibilities', function (Blueprint $table) {
            $table->id();
            $table->string('OKUD', 30);
            $table->string('order_number', 30);
            $table->date('order_date');
            $table->string('reason', 255);
            $table->string('responsibility1', 255);
            $table->string('responsibility2', 255)->nullable(true);
            $table->string('responsibility3', 255)->nullable(true);
            $table->string('class', 255)->default('orderDistributionResponsibilities');
            $table->string('doc_name', 255)->default('Приказ о распределении обязанностей между руководством');
            $table->string('route_name', 255)->default('createOrderDistributionResponsibilities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_distribution_responsibilities');
    }
};
