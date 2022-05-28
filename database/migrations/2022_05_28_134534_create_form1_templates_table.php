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
        Schema::create('form1_templates', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->string('place', 255);
            $table->string('provider_org_full_name', 255);
            $table->string('provider_org_employee_fio', 255);
            $table->string('provider_org_employee_position', 255);
            $table->string('provider_doc_name', 255);
            $table->string('customer_org_full_name', 255);
            $table->string('customer_org_employee_fio', 255);
            $table->string('customer_org_employee_position', 255);
            $table->string('product', 255);
            $table->string('purpose_acquisition', 255);
            $table->integer('full_price_rub');
            $table->integer('full_price_kop');
            $table->string('customer_doc_name', 255);
            $table->integer('vat');
            $table->integer('vat_price_rub');
            $table->integer('vat_price_kop');
            $table->string('fin_source', 255);
            $table->string('delivery', 255);
            $table->integer('fix_days');
            $table->integer('force_majeure_days');
            $table->integer('change_days');
            $table->string('additional_info', 1000);
            $table->string('provider_tel', 15);
            $table->string('provider_fax', 15);
            $table->date('provider_date');
            $table->string('customer_tel', 15);
            $table->string('customer_fax', 15);
            $table->date('customer_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form1_templates');
    }
};
