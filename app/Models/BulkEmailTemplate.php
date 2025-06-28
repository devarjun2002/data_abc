<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BulkEmailTemplate extends Model
{
    protected $table = 'bulk_email_template';
    protected $primaryKey = 'bulk_email_template_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'bulk_email_template_name',
        'bulk_email_template_subject',
        'bulk_email_template_category',
    ];
}
