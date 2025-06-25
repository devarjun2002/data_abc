<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BulkEmailTemplateDevelopment extends Model
{
    protected $table = 'bulk_email_template_development';
    protected $primaryKey = 'bulk_email_template_development_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'bulk_email_template_development_name',
        'bulk_email_template_development_subject'
    ];
}
