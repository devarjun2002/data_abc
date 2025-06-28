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
    protected $guarded = [];

    protected $casts = [
        'landlord_attachments_date_created' => 'datetime',
    ];

    protected $fillable = [
        'landlord_id',
        'landlord_attachments_file_name',
        'landlord_attachments_file_size',
        'landlord_attachments_caption',
        'landlord_attachments_sort',
        'landlord_attachments_date_created',
        'landlord_attachments_created_by',
        'landlord_attachments_document_type_id'
    ];

    // Relationships --done
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'landlord_attachments_created_by', 'employee_id');
    }

    public function landlord(): BelongsTo
    {
        return $this->belongsTo(Landlord::class, 'landlord_id', 'landlord_id');
    }

    public function documentType(): BelongsTo
    {
        return $this->belongsTo(DocumentType::class, 'landlord_attachments_document_type_id', 'document_type_id');
    }
}
