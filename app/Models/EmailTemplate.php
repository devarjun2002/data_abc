<?php

namespace App\Models;
use App\Models\EmailTemplateCategory;
use App\Models\Employee;

use Illuminate\Database\Eloquent\Model;

class EmailTemplate extends Model
{
    protected $table = 'email_template';
    protected $primaryKey = 'email_template_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'email_template_date_created' => 'datetime',
        'email_template_date_updated' => 'datetime',
    ];

    protected $fillable = [
        'email_template_name',
        'email_template_category',
        'email_template_to',
        'email_template_cc',
        'email_template_bcc',
        'email_template_subject',
        'email_template_body',
        'email_template_date_created',
        'email_template_date_updated',
        'email_template_created_by',
        'email_template_updated_by'
    ];

    // Relationships --done
    public function category()
    {
        return $this->belongsTo(EmailTemplateCategory::class, 'email_template_category', 'email_template_category_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'email_template_created_by', 'employee_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'email_template_updated_by', 'employee_id');
    }
}
