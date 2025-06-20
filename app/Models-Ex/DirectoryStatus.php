<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DirectoryStatus extends Model
{
    protected $table = 'directory_status';
    protected $primaryKey = 'directory_status_id';
    public $timestamps = false;

    protected $fillable = [
        'directory_status_name'
    ];

    // Relationships
    public function directories()
    {
        return $this->hasMany(Directory::class, 'directory_status', 'directory_status_id');
    }

    public function directoryIndividuals()
    {
        return $this->hasMany(DirectoryIndividual::class, 'directory_individual_status', 'directory_status_id');
    }
}
