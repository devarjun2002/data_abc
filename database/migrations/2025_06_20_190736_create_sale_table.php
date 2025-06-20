<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sale', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('sale_id');
            $table->integer('sale_offer_id')->nullable();
            $table->integer('sale_property')->nullable();
            $table->date('sale_agreed_date')->nullable();
            $table->decimal('sale_agreed_price')->nullable();
            $table->tinyInteger('sale_purchase_finance')->nullable();
            $table->text('sale_notes')->nullable();
            $table->integer('sale_vendor_solicitor_company_intermediary')->nullable();
            $table->integer('sale_vendor_solicitor_company')->nullable();
            $table->integer('sale_vendor_solicitor_company_individual')->nullable();
            $table->integer('sale_vendor_mortgage_advisor')->nullable();
            $table->integer('sale_vendor_mortgage_advisor_individual')->nullable();
            $table->integer('sale_buyer_solicitor_company_intermediary')->nullable();
            $table->integer('sale_buyer_solicitor_company')->nullable();
            $table->integer('sale_buyer_solicitor_company_individual')->nullable();
            $table->integer('sale_buyer_mortgage_advisor')->nullable();
            $table->integer('sale_buyer_mortgage_advisor_individual')->nullable();
            $table->tinyInteger('sale_status')->nullable();
            $table->date('sale_target_exchange_date')->nullable();
            $table->date('sale_target_completion_date')->nullable();
            $table->text('sale_collapsed_reason')->nullable();
            $table->tinyInteger('sale_collapsed_reason_id')->nullable();
            $table->tinyInteger('sale_viewings_status')->nullable();
            $table->integer('sale_employee_responsible')->nullable();
            $table->date('sale_next_review_date')->nullable();
            $table->text('sale_next_review_notes')->nullable();
            $table->tinyInteger('sale_media_utilities')->nullable();
            $table->decimal('sale_commission_completion_payment')->nullable();
            $table->tinyInteger('sale_commission_completion_payment_type')->nullable();
            $table->date('sale_commission_completion_date_paid')->nullable();
            $table->date('sale_completion_date')->nullable();
            $table->tinyInteger('sale_invoice_check_override')->nullable();
            $table->tinyInteger('sale_auto_progression_chase_vendor')->nullable();
            $table->tinyInteger('sale_auto_progression_chase_buyer')->nullable();
            $table->dateTime('sale_last_update')->nullable();
            $table->integer('sale_created_by')->nullable();
            $table->integer('sale_updated_by')->nullable();
            $table->dateTime('sale_date_created')->nullable();
            $table->dateTime('sale_date_updated')->nullable();
        });
        DB::statement("ALTER TABLE sale ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('sale');
    }
};
