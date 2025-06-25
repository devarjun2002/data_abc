<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenancy_allowed_occupant', function (Blueprint $table) {
            $table->id('tenancy_allowed_occupant_id');
            $table->integer('tenancy_id')->nullable();
            $table->smallInteger('tenancy_allowed_occupant_title')->nullable();
            $table->text('tenancy_allowed_occupant_first_name')->nullable();
            $table->text('tenancy_allowed_occupant_surname')->nullable();
            $table->text('tenancy_allowed_occupant_phone_number')->nullable();
            $table->text('tenancy_allowed_occupant_email_address')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenancy_allowed_occupant');
    }
};
