<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandlordAttachments extends Model
{
    use HasFactory;

    protected $table = 'landlord_attachments';
    protected $primaryKey = 'landlord_attachments_id';
    public $timestamps = false;

    protected $fillable = [
        'landlord_id',
        'landlord_attachments_file_name',
        'landlord_attachments_file_size',
        'landlord_attachments_caption',
    ];

    public function landlord()
    {
        return $this->belongsTo(Landlord::class, 'landlord_id', 'landlord_id');
    }
}
