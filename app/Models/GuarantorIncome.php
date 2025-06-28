<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuarantorIncome extends Model
{
    protected $table = 'guarantor_income';
    protected $primaryKey = 'guarantor_income_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'guarantor_income_guarantor_id',
        'guarantor_income_amount',
        'guarantor_income_frequency',
        'guarantor_income_source'
   ];

    // Relationships --done
    public function guarantor(): BelongsTo
    {
        return $this->belongsTo(Guarantor::class, 'guarantor_income_id', 'guarantor_id');
    }

    public function frequency(): BelongsTo
    {
        return $this->belongsTo(IncomeFrequency::class, 'guarantor_income_frequency', 'income_frequency_id');
    }
}
