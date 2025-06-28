<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bank extends Model
{
    protected $table = 'bank';
    protected $primaryKey = 'bank_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];
    
    protected $fillable = [
        'bank_name'
    ];

    // Relationships --done
    public function branchesCurrent(): HasMany
    {
        return $this->hasMany(Branch::class, 'branch_bank_name_current', 'bank_id');
    }

    public function branchesClient(): HasMany
    {
        return $this->hasMany(Branch::class, 'branch_bank_name_client', 'bank_id');
    }

    public function landlords(): HasMany
    {
        return $this->hasMany(Landlord::class, 'landlord_bank_name', 'bank_id');
    }

    public function directoryIndividuals(): HasMany
    {
        return $this->hasMany(DirectoryIndividual::class, 'directory_individual_bank_name', 'bank_id');
    }

    public function directories(): HasMany
    {
        return $this->hasMany(Directory::class, 'directory_bank_name', 'bank_id');
    }
}
