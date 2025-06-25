<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('email_template_category', function (Blueprint $table) {
            $table->id('email_template_category_id');
            $table->text('email_template_category_name')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('email_template_category');
    }
};
