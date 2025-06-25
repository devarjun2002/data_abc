<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseType extends Model
{
    use HasFactory;

    protected $table = 'lease_type';
    protected $primaryKey = 'lease_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'lease_type_name',
    ];
}
