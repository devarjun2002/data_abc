<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BulkEmail extends Model
{
    protected $table = 'bulk_email';
    protected $primaryKey = 'bulk_email_id';
    public $timestamps = false;
    protected $guarded = [];

    // Relations
    public function property()
    {
        return $this->belongsTo(Property::class, 'bulk_email_property_id', 'property_id');
    }
    public function customerType()
    {
        return $this->belongsTo(CustomerType::class, 'bulk_email_customer_type', 'customer_type_id');
    }
    public function applicantRequirement()
    {
        return $this->belongsTo(ApplicantRequirement::class, 'bulk_email_app_req_id', 'ar_id');
    }
    public function recipients()
    {
        return $this->hasMany(BulkEmailRecipient::class, 'bulk_email_id', 'bulk_email_id');
    }
    public function template()
    {
        return $this->belongsTo(BulkEmailTemplate::class, 'bulk_email_template_id', 'bulk_email_template_id');
    }
    public function buyer()
    {
        return $this->belongsTo(Buyer::class, 'buyer_id', 'buyer_id');
    }
}
