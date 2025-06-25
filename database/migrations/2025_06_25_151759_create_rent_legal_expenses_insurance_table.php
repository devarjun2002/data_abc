<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rent_legal_expenses_insurance', function (Blueprint $table) {
            $table->id('rlei_id');
            $table->smallInteger('rlei_policy_type')->nullable();
            $table->integer('rlei_tenancy_id')->nullable();
            $table->integer('rlei_property_id')->nullable();
            $table->integer('rlei_room_id')->nullable();
            $table->text('rlei_policy_ref')->nullable();
            $table->date('rlei_policy_start_date')->nullable();
            $table->date('rlei_policy_end_date')->nullable();
            $table->smallInteger('rlei_term')->nullable();
            $table->smallInteger('rlei_term_unit')->nullable();
            $table->text('rlei_notes')->nullable();
            $table->smallInteger('rlei_status')->nullable();
            $table->dateTime('rlei_date_created')->nullable();
            $table->dateTime('rlei_date_updated')->nullable();
            $table->integer('rlei_created_by')->nullable();
            $table->integer('rlei_updated_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rent_legal_expenses_insurance');
    }
};
