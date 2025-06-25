<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenancy', function (Blueprint $table) {
            $table->id('tenancy_id');
            $table->string('tenancy_token', 40)->nullable();
            $table->smallInteger('tenancy_type')->nullable();
            $table->integer('tenancy_property')->nullable();
            $table->integer('tenancy_furnished')->nullable();
            $table->smallInteger('tenancy_children')->nullable();
            $table->smallInteger('tenancy_pets')->nullable();
            $table->smallInteger('tenancy_smoking')->nullable();
            $table->smallInteger('tenancy_property_part')->nullable();
            $table->integer('tenancy_property_part_room')->nullable();
            $table->text('tenancy_property_part_description')->nullable();
            $table->smallInteger('tenancy_shared_facilities')->nullable();
            $table->text('tenancy_shared_facilities_description')->nullable();
            $table->date('tenancy_agreement_date')->nullable();
            $table->date('tenancy_start_date')->nullable();
            $table->smallInteger('tenancy_fixed_term')->nullable();
            $table->smallInteger('tenancy_fixed_term_unit')->nullable();
            $table->date('tenancy_fixed_term_end_date')->nullable();
            $table->decimal('tenancy_rent_amount', 10, 2)->nullable();
            $table->smallInteger('tenancy_rent_frequency')->nullable();
            $table->smallInteger('tenancy_rent_payable')->nullable();
            $table->smallInteger('tenancy_rent_agreement')->nullable();
            $table->text('tenancy_rent_frequency_schedule')->nullable();
            $table->smallInteger('tenancy_rent_payment_method')->nullable();
            $table->smallInteger('tenancy_council_pay_rent')->nullable();
            $table->smallInteger('tenancy_rent_vat_rate')->nullable();
            $table->decimal('tenancy_service_charge_amount', 10, 2)->nullable();
            $table->smallInteger('tenancy_service_charge_frequency')->nullable();
            $table->smallInteger('tenancy_service_charge_payable')->nullable();
            $table->smallInteger('tenancy_service_charge_agreement')->nullable();
            $table->text('tenancy_service_charge_frequency_schedule')->nullable();
            $table->smallInteger('tenancy_service_charge_payment_method')->nullable();
            $table->smallInteger('tenancy_service_charge_vat_rate')->nullable();
            $table->decimal('tenancy_insurance_amount', 10, 2)->nullable();
            $table->smallInteger('tenancy_insurance_frequency')->nullable();
            $table->smallInteger('tenancy_insurance_payable')->nullable();
            $table->smallInteger('tenancy_insurance_agreement')->nullable();
            $table->text('tenancy_insurance_frequency_schedule')->nullable();
            $table->smallInteger('tenancy_insurance_payment_method')->nullable();
            $table->smallInteger('tenancy_insurance_vat_rate')->nullable();
            $table->text('tenancy_notes')->nullable();
            $table->integer('tenancy_agent_branch')->nullable();
            $table->integer('tenancy_agent_employee')->nullable();
            $table->smallInteger('tenancy_letting_service')->nullable();
            $table->decimal('tenancy_tenant_find_fee', 10, 2)->nullable();
            $table->smallInteger('tenancy_tenant_find_fee_type')->nullable();
            $table->decimal('tenancy_management_fee', 10, 2)->nullable();
            $table->smallInteger('tenancy_management_fee_type')->nullable();
            $table->smallInteger('tenancy_gas')->nullable();
            $table->smallInteger('tenancy_electricity')->nullable();
            $table->smallInteger('tenancy_water')->nullable();
            $table->smallInteger('tenancy_oil')->nullable();
            $table->smallInteger('tenancy_telephone')->nullable();
            $table->smallInteger('tenancy_broadband')->nullable();
            $table->smallInteger('tenancy_tv_licence')->nullable();
            $table->smallInteger('tenancy_sat_cable_tv')->nullable();
            $table->smallInteger('tenancy_council_tax')->nullable();
            $table->smallInteger('tenancy_deposit_required')->nullable();
            $table->decimal('tenancy_deposit_amount', 10, 2)->nullable();
            $table->smallInteger('tenancy_status')->nullable();
            $table->smallInteger('tenancy_renewal_status')->nullable();
            $table->text('tenancy_renewal_notes')->nullable();
            $table->integer('tenancy_renewal_employee')->nullable();
            $table->integer('tenancy_is_renewal_id')->nullable();
            $table->smallInteger('tenancy_is_renewal')->nullable();
            $table->date('tenancy_tnts_vacation_date')->nullable();
            $table->date('tenancy_official_end_date')->nullable();
            $table->smallInteger('tenancy_move_out_reason')->nullable();
            $table->text('tenancy_move_out_notes')->nullable();
            $table->decimal('tenancy_tenant_find_with_management_fee', 10, 2)->nullable();
            $table->smallInteger('tenancy_tenant_find_with_management_fee_type')->nullable();
            $table->smallInteger('tenancy_overdue_tc_reminders')->nullable();
            $table->smallInteger('tenancy_student')->nullable();
            $table->smallInteger('tenancy_inspection_frequency')->nullable();
            $table->date('tenancy_last_inspection_date')->nullable();
            $table->date('tenancy_last_inspection_date_backup')->nullable();
            $table->integer('tenancy_move_out_employee')->nullable();
            $table->text('tenancy_inventory_ingoing_link')->nullable();
            $table->text('tenancy_inventory_outgoing_link')->nullable();
            $table->date('tenancy_notice_expiry_date')->nullable();
            $table->date('tenancy_accounts_next_review_date')->nullable();
            $table->smallInteger('tenancy_viewings_permitted')->nullable();
            $table->dateTime('tenancy_date_created')->nullable();
            $table->dateTime('tenancy_date_updated')->nullable();
            $table->integer('tenancy_created_by')->nullable();
            $table->integer('tenancy_updated_by')->nullable();
            $table->smallInteger('tenancy_management_takeover')->nullable();
            $table->date('tenancy_management_takeover_date')->nullable();
            $table->text('tenancy_management_takeover_notes')->nullable();
            $table->integer('tenancy_periodic_rent_increase_negotiator')->nullable();
            $table->date('tenancy_rlei_opt_out_date')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenancy');
    }
};
