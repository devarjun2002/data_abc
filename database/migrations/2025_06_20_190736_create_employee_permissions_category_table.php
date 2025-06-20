<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employee_permissions_category', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('employee_permissions_category_id');
            $table->text('employee_permissions_category_name')->nullable();
            $table->tinyInteger('employee_permissions_category_sort')->nullable();
        });
        DB::statement("ALTER TABLE employee_permissions_category ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('employee_permissions_category');
    }
};
