<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BulkEmailTemplateAllEmployees extends Model
{
    protected $table = 'bulk_email_template_all_employees';
    protected $primaryKey = 'bulk_email_template_all_employees_id';
    public $timestamps = false;
    protected $guarded = [];
}
