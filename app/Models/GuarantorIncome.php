<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuarantorIncome extends Model
{
    protected $table = 'guarantor_income';
    protected $primaryKey = 'guarantor_income_id';
    public $timestamps = false;
    protected $guarded = [];

    public function guarantor()
    {
        return $this->belongsTo(Guarantor::class, 'guarantor_id', 'guarantor_id');
    }
    public function frequency()
    {
        return $this->belongsTo(IncomeFrequency::class, 'income_frequency_id', 'income_frequency_id');
    }
}
