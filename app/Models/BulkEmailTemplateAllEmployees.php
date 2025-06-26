<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BulkEmailTemplateAllEmployees extends Model
{
    protected $table = 'bulk_email_template_all_employees';
    protected $primaryKey = 'bulk_email_template_all_employees_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'bulk_email_template_all_employees_name',
        'bulk_email_template_all_employees_subject',
        'bulk_email_template_all_employees_category'
    ];

    // Relationships
    public function category(): BelongsTo
    {
        return $this->belongsTo(BulkEmailTemplateCategory::class, 'bulk_email_template_all_employees_category', 'bulk_email_template_category_id');
    }
}
