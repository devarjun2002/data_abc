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

    protected $fillable = [
        'bulk_email_template_name',
        'bulk_email_template_subject',
        'bulk_email_template_category',
        'bulk_email_template_body',
        'bulk_email_template_description',
        'bulk_email_template_active',
        'bulk_email_template_sort'
    ];

    // Relationships
    public function bulkEmails(): HasMany
    {
        return $this->hasMany(BulkEmail::class, 'bulk_email_template_id', 'bulk_email_template_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(BulkEmailTemplateCategory::class, 'bulk_email_template_category', 'bulk_email_template_category_id');
    }
}
