<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailTemplateCategory extends Model
{
    protected $table = 'email_template_category';
    protected $primaryKey = 'email_template_category_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'email_template_category_name'
    ];
    // Reverse Relationships
public function emailTemplates()
    {
        return $this->hasMany(EmailTemplate::class, 'email_template_category', 'email_template_category_id');
    }
}