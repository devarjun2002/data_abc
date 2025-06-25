<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenancy_deposit_contributor', function (Blueprint $table) {
            $table->id('tenancy_deposit_contributor_id');
            $table->smallInteger('tenancy_deposit_contributor_title')->nullable();
            $table->text('tenancy_deposit_contributor_first_name')->nullable();
            $table->text('tenancy_deposit_contributor_surname')->nullable();
            $table->decimal('tenancy_deposit_contributor_amount', 10, 2)->nullable();
            $table->integer('tenancy_id')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenancy_deposit_contributor');
    }
};
