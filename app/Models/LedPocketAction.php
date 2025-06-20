<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LedPocketAction extends Model
{
    use HasFactory;

    protected $table = 'led_pocket_action';
    protected $primaryKey = 'led_pocket_action_id';
    public $timestamps = false;

    protected $fillable = [
        'led_pocket_action_name',
        'led_pocket_action_sort',
    ];
}
