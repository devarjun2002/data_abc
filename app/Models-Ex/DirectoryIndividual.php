<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DirectoryIndividual extends Model
{
    protected $table = 'directory_individual';
    protected $primaryKey = 'directory_individual_id';
    public $timestamps = false;
    protected $fillable = [];

    // Relationships
    public function company()
    {
        return $this->belongsTo(Directory::class, 'directory_individual_company', 'directory_id');
    }
    public function title()
    {
        return $this->belongsTo(Title::class, 'directory_individual_title', 'title_id');
    }
    public function bank()
    {
        return $this->belongsTo(Bank::class, 'directory_individual_bank_name', 'bank_id');
    }
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'directory_individual_created_by', 'employee_id');
    }
    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'directory_individual_updated_by', 'employee_id');
    }
    public function status()
    {
        return $this->belongsTo(DirectoryStatus::class, 'directory_individual_status', 'directory_status_id');
    }
    public function country()
    {
        return $this->belongsTo(Country::class, 'directory_individual_country', 'country_id');
    }
    public function notes()
    {
        // Placeholder for future: if notes are normalized, relate here
        return null;
    }
    public function attachments()
    {
        // Placeholder for future: if attachments table exists
        return null;
    }
    public function files()
    {
        // Placeholder for future: if files table exists
        return null;
    }
    public function trades()
    {
        return $this->belongsToMany(DirectoryTrades::class, 'directory_to_trades', 'directory_id', 'directory_trades_id');
    }
    public function companyIndividuals()
    {
        return $this->hasMany(DirectoryIndividual::class, 'directory_individual_company', 'directory_individual_id');
    }
}
