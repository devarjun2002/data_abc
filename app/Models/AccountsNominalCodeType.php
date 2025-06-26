<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsNominalCodeType extends Model
{
    protected $table = 'accounts_nominal_code_type';
    protected $primaryKey = 'nominal_code_type_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'nominal_code_type_name',
    ];

    // Relationships
    public function nominalCodes(): HasMany
    {
        return $this->hasMany(AccountsNominalCode::class, 'nominal_code_type', 'nominal_code_type_id');
    }
}
