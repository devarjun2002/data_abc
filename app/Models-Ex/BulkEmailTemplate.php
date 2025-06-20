<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BulkEmailTemplate extends Model
{
    protected $table = 'bulk_email_template';
    protected $primaryKey = 'bulk_email_template_id';
    public $timestamps = false;
    protected $guarded = [];

    public function bulkEmails()
    {
        return $this->hasMany(BulkEmail::class, 'bulk_email_template_id', 'bulk_email_template_id');
    }
}
