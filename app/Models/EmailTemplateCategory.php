<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailTemplateCategory extends Model
{
    protected $table = 'email_template_category';
    protected $primaryKey = 'email_template_category_id';
    public $timestamps = false;

    protected $fillable = [
        'email_template_category_name'
    ];

    public function emailTemplates()
    {
        return $this->hasMany(EmailTemplate::class, 'email_template_category');
    }
}
