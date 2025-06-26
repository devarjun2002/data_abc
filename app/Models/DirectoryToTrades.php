<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    // Relationships
    public function directory(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'directory_id', 'directory_id');
    }

    public function trade(): BelongsTo
    {
        return $this->belongsTo(DirectoryTrades::class, 'directory_trades_id', 'directory_trades_id');
    }
}
