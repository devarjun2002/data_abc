<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
    protected $table = 'directory';
    protected $primaryKey = 'directory_id';
    public $timestamps = false;
    protected $fillable = [];

    // Relationships
    public function individuals()
    {
        return $this->hasMany(DirectoryIndividual::class, 'directory_individual_company', 'directory_id');
    }
    public function category()
    {
        return $this->belongsTo(DirectoryCategory::class, 'directory_category', 'directory_category_id');
    }
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'directory_created_by', 'employee_id');
    }
    public function updatedBy()
    {
        return $this->belongsTo(Employee::class, 'directory_updated_by', 'employee_id');
    }
    public function bank()
    {
        return $this->belongsTo(Bank::class, 'directory_bank_name', 'bank_id');
    }
    public function country()
    {
        return $this->belongsTo(Country::class, 'directory_country', 'country_id');
    }
    public function status()
    {
        return $this->belongsTo(DirectoryStatus::class, 'directory_status', 'directory_status_id');
    }
    public function commissionScheme()
    {
        return $this->belongsTo(DirectoryCommissionScheme::class, 'directory_commission_scheme', 'directory_commission_scheme_id');
    }
    public function paymentTerms()
    {
        return $this->belongsTo(AccountsPaymentTerm::class, 'directory_payment_terms', 'accounts_payment_term_id');
    }
    public function nominalCode()
    {
        return $this->belongsTo(AccountsNominalCode::class, 'directory_nominal_code', 'nominal_code_id');
    }
    public function vatRate()
    {
        return $this->belongsTo(AccountsVatRate::class, 'directory_vat_rate', 'vat_rate_id');
    }
    public function trades()
    {
        return $this->belongsToMany(DirectoryTrades::class, 'directory_to_trades', 'directory_id', 'directory_trades_id');
    }
    public function individualsByStatus($statusId)
    {
        return $this->hasMany(DirectoryIndividual::class, 'directory_individual_company', 'directory_id')->where('directory_individual_status', $statusId);
    }
    public function individualsByTitle($titleId)
    {
        return $this->hasMany(DirectoryIndividual::class, 'directory_individual_company', 'directory_id')->where('directory_individual_title', $titleId);
    }
    public function individualsByCountry($countryId)
    {
        return $this->hasMany(DirectoryIndividual::class, 'directory_individual_company', 'directory_id')->where('directory_individual_country', $countryId);
    }
    public function individualsByBank($bankId)
    {
        return $this->hasMany(DirectoryIndividual::class, 'directory_individual_company', 'directory_id')->where('directory_individual_bank_name', $bankId);
    }
    public function individualsByStatusAndTitle($statusId, $titleId)
    {
        return $this->hasMany(DirectoryIndividual::class, 'directory_individual_company', 'directory_id')
            ->where('directory_individual_status', $statusId)
            ->where('directory_individual_title', $titleId);
    }
    public function individualsByEmail($email)
    {
        return $this->hasMany(DirectoryIndividual::class, 'directory_individual_company', 'directory_id')->where('directory_individual_email', $email);
    }
    public function individualsBySurname($surname)
    {
        return $this->hasMany(DirectoryIndividual::class, 'directory_individual_company', 'directory_id')->where('directory_individual_surname', $surname);
    }
    public function individualsByFirstName($firstName)
    {
        return $this->hasMany(DirectoryIndividual::class, 'directory_individual_company', 'directory_id')->where('directory_individual_first_name', $firstName);
    }
    public function individualsByFullName($firstName, $surname)
    {
        return $this->hasMany(DirectoryIndividual::class, 'directory_individual_company', 'directory_id')
            ->where('directory_individual_first_name', $firstName)
            ->where('directory_individual_surname', $surname);
    }
}
