<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DirectoryTrades extends Model
{
    protected $table = 'directory_trades';
    protected $primaryKey = 'directory_trades_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'directory_trades_name'
    ];

    public function directories()
    {
        return $this->belongsToMany(Directory::class, 'directory_to_trades', 'directory_trades_id', 'directory_id');
    }
}
