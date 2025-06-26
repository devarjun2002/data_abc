<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function bulkEmails(): HasMany
    {
        return $this->hasMany(BulkEmail::class, 'bulk_email_template_id', 'bulk_email_template_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(BulkEmailTemplateCategory::class, 'bulk_email_template_category', 'bulk_email_template_category_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'bulk_email_template_created_by', 'employee_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'bulk_email_template_updated_by', 'employee_id');
    }
}
