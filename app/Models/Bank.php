<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
    public function branchesCurrent()
    {
        return $this->hasMany(Branch::class, 'branch_bank_name_current', 'bank_id');
    }

    public function branchesClient()
    {
        return $this->hasMany(Branch::class, 'branch_bank_name_client', 'bank_id');
    }

    public function landlords()
    {
        return $this->hasMany(Landlord::class, 'landlord_bank_name', 'bank_id');
    }

    public function directoryIndividuals()
    {
        return $this->hasMany(DirectoryIndividual::class, 'directory_individual_bank_name', 'bank_id');
    }

    public function directories()
    {
        return $this->hasMany(Directory::class, 'directory_bank_name', 'bank_id');
    }
    // Reverse Relationships
public function guarantors()
    {
        return $this->hasMany(Guarantor::class, 'guarantor_bank_name', 'bank_id');
    }
}