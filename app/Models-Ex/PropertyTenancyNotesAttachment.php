<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyTenancyNotesAttachment extends Model
{
    protected $table = 'property_tenancy_notes_attachments';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [];

    // Add relationships here if you add foreign keys to property, tenancy, notes, etc.
}
