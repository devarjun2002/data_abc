<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExportDateType extends Model
{
    protected $table = 'export_date_type';
    protected $primaryKey = 'export_date_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'export_date_type_name',
    ];

    public function exportData()
    {
        return $this->hasMany(ExportData::class, 'export_date_type_id', 'export_date_type_id');
    }
}
