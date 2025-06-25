<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id('works_id');
            $table->integer('works_property')->nullable();
            $table->integer('works_development')->nullable();
            $table->smallInteger('works_category')->nullable();
            $table->integer('works_contractor')->nullable();
            $table->text('works_description')->nullable();
            $table->text('works_outcome')->nullable();
            $table->text('works_notes')->nullable();
            $table->text('works_private_notes')->nullable();
            $table->text('works_cancellation_reason')->nullable();
            $table->text('works_contractor_quote')->nullable();
            $table->decimal('works_contractor_cost', 10, 2)->nullable();
            $table->text('works_agency_invoice_id')->nullable();
            $table->smallInteger('works_status')->nullable();
            $table->smallInteger('works_room')->nullable();
            $table->smallInteger('works_reminders')->nullable();
            $table->dateTime('works_date_created')->nullable();
            $table->dateTime('works_date_updated')->nullable();
            $table->dateTime('works_date_last_instructed')->nullable();
            $table->dateTime('works_date_last_awaiting_landlord_approval')->nullable();
            $table->dateTime('works_date_last_awaiting_landlord_payment')->nullable();
            $table->dateTime('works_date_last_pending')->nullable();
            $table->integer('works_created_by')->nullable();
            $table->integer('works_updated_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('works');
    }
};
