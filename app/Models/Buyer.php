<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    protected $table = 'buyer';
    protected $primaryKey = 'buyer_id';
    public $timestamps = false;
    protected $guarded = [];

    public function bulkEmails()
    {
        return $this->hasMany(BulkEmail::class, 'buyer_id', 'buyer_id');
    }
    public function bulkEmailRecipients()
    {
        return $this->hasMany(BulkEmailRecipient::class, 'buyer_id', 'buyer_id');
    }
}
