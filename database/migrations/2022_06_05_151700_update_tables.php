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
        Schema::table('marriage_contracts', function (Blueprint $table) {
            $table->string('class')->default('marriageContract');
            $table->string('doc_name')->default('Брачный договор');
            $table->string('route_name')->default('createMarriageContract');
        });

        Schema::table('author_contract_designers', function (Blueprint $table) {
            $table->string('class')->default('authorContractDesigner');
            $table->string('doc_name')->default('Авторский договор с дизайнером');
            $table->string('route_name')->default('createAuthorContractDesigner');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
