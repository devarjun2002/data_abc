<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolicitorQuotationType extends Model
{
    protected $table = 'solicitor_quotation_type';
    protected $primaryKey = 'solicitor_quotation_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'solicitor_quotation_type_name',
    ];
}
