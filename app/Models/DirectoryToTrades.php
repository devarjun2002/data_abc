<?php

namespace App\Models;
use App\Models\Directory;
use App\Models\DirectoryTrades;

use Illuminate\Database\Eloquent\Model;

class DirectoryToTrades extends Model
{
    protected $table = 'directory_to_trades';
    protected $primaryKey = 'directory_to_trades_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'directory_id',
        'directory_trades_id'
    ];

    // Relationships --done
    public function directory()
    {
        return $this->belongsTo(Directory::class, 'directory_id', 'directory_id');
    }

    public function trade()
    {
        return $this->belongsTo(DirectoryTrades::class, 'directory_trades_id', 'directory_trades_id');
    }
}
