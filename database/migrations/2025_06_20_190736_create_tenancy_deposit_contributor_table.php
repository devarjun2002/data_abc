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
            $table->engine = 'InnoDB';
            $table->increments('tenancy_deposit_contributor_id');
            $table->tinyInteger('tenancy_deposit_contributor_title')->nullable();
            $table->text('tenancy_deposit_contributor_first_name')->nullable();
            $table->text('tenancy_deposit_contributor_surname')->nullable();
            $table->decimal('tenancy_deposit_contributor_amount')->nullable();
            $table->integer('tenancy_id')->nullable();
        });
        DB::statement("ALTER TABLE tenancy_deposit_contributor ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('tenancy_deposit_contributor');
    }
};
