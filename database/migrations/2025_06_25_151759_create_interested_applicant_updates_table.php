<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('interested_applicant_updates', function (Blueprint $table) {
            $table->id('interested_applicant_updates_id');
            $table->integer('interested_applicant_updates_interested_applicant_id')->nullable();
            $table->text('interested_applicant_updates_private_notes')->nullable();
            $table->dateTime('interested_applicant_updates_date_created')->nullable();
            $table->integer('interested_applicant_updates_created_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('interested_applicant_updates');
    }
};
