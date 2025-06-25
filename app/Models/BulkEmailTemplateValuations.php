<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BulkEmailTemplateValuations extends Model
{
    protected $table = 'bulk_email_template_valuations';
    protected $primaryKey = 'bulk_email_template_valuations_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'bulk_email_template_valuations_name',
        'bulk_email_template_valuations_subject'
    ];
}
