<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DirectoryToTrades extends Model
{
    protected $table = 'directory_to_trades';
    protected $primaryKey = 'directory_to_trades_id';
    public $timestamps = false;

    protected $fillable = [
        'directory_id',
        'directory_trades_id'
    ];

    public function directory()
    {
        return $this->belongsTo(Directory::class, 'directory_id');
    }

    public function trade()
    {
        return $this->belongsTo(DirectoryTrades::class, 'directory_trades_id');
    }
}
