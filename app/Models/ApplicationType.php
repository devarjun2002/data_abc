<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ApplicationType extends Model
{
    protected $table = 'application_type';
    protected $primaryKey = 'application_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'application_type_name',
    ];

    // Relationships --done
    public function applications(): HasMany
    {
        return $this->hasMany(Application::class, 'application_type', 'application_type_id');
    }
}
