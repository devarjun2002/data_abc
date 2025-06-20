<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('directory_commission_scheme', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('directory_commission_scheme_id');
            $table->text('directory_commission_scheme_name')->nullable();
        });
        DB::statement("ALTER TABLE directory_commission_scheme ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('directory_commission_scheme');
    }
};
