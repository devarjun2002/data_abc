<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExportData extends Model
{
    protected $table = 'export_data';
    protected $primaryKey = 'export_data_id';
    public $timestamps = false;
    protected $fillable = [];

    public function dateType()
    {
        return $this->belongsTo(ExportDateType::class, 'export_date_type_id', 'export_date_type_id');
    }
}
