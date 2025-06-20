<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sale_task', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('sale_task_id');
            $table->integer('sale_id')->nullable();
            $table->tinyInteger('sale_task_type')->nullable();
            $table->text('sale_task_name')->nullable();
            $table->tinyInteger('sale_task_status')->nullable();
            $table->date('sale_task_target_date')->nullable();
            $table->date('sale_task_completed_date')->nullable();
            $table->text('sale_task_notes')->nullable();
            $table->text('sale_task_notes_private')->nullable();
            $table->tinyInteger('sale_task_sort')->nullable();
            $table->tinyInteger('sale_task_vendor_notified')->nullable();
            $table->tinyInteger('sale_task_buyer_notified')->nullable();
            $table->dateTime('sale_task_date_updated')->nullable();
            $table->integer('sale_task_updated_by')->nullable();
        });
        DB::statement("ALTER TABLE sale_task ROW_FORMAT=DYNAMIC");
    }

    public function down()
    {
        Schema::dropIfExists('sale_task');
    }
};
