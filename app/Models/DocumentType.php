<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    protected $table = 'document_type';
    protected $primaryKey = 'document_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'document_type_name'
    ];
    // Reverse Relationships
public function landlordAttachmentses()
    {
        return $this->hasMany(LandlordAttachments::class, 'landlord_attachments_document_type_id', 'document_type_id');
    }
}