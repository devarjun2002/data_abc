<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

    // Relationships --done
    public function nominalCodes()
    {
        return $this->hasMany(AccountsNominalCode::class, 'nominal_code_type', 'nominal_code_type_id');
    }
}
