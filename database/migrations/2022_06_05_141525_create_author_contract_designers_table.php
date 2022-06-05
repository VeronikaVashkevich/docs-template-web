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
        Schema::create('author_contract_designers', function (Blueprint $table) {
            $table->id();
            $table->string('number', 15);
            $table->date('date');
            $table->string('customer', 255);
            $table->string('customer_repr', 255);
            $table->string('designer', 255);
            $table->string('images', 255);
            $table->string('territory', 255);
            $table->integer('time');
            $table->float('reward');
            $table->integer('contract_days');
            $table->string('customer_address', 255);
            $table->string('customer_pay', 255);
            $table->string('customer_tel', 15);
            $table->string('designer_address', 255);
            $table->string('designer_passport', 255);
            $table->string('designer_phone', 15);
            $table->string('tax_data', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('author_contract_designers');
    }
};
