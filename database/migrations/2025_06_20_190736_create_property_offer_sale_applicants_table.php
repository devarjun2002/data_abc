<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_offer_sale_applicants', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('property_offer_sale_applicants_id');
            $table->integer('property_offer_sale_id')->nullable();
            $table->integer('applicant_id')->nullable();
        });
        DB::statement("ALTER TABLE property_offer_sale_applicants ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('property_offer_sale_applicants');
    }
};
