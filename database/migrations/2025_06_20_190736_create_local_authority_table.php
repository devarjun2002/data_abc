<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('local_authority', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('local_authority_id');
            $table->text('local_authority_name')->nullable();
            $table->text('local_authority_housing_department_name')->nullable();
            $table->text('local_authority_property_number_name')->nullable();
            $table->text('local_authority_address_line_1')->nullable();
            $table->text('local_authority_address_line_2')->nullable();
            $table->text('local_authority_suburb')->nullable();
            $table->text('local_authority_town_city')->nullable();
            $table->string('local_authority_postcode', 8)->nullable();
            $table->integer('local_authority_country')->nullable();
            $table->tinyInteger('local_authority_selective_licencing')->nullable();
            $table->date('local_authority_selective_licencing_start_date')->nullable();
            $table->date('local_authority_selective_licencing_end_date')->nullable();
            $table->text('local_authority_selective_licencing_email_address')->nullable();
        });
        DB::statement("ALTER TABLE local_authority ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('local_authority');
    }
};
