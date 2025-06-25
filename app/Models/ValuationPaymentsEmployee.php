<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValuationPaymentsEmployee extends Model
{
    protected $table = 'valuation_payments_employee';
    protected $primaryKey = 'valuation_payments_employee_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'valuation_payments_employee_valuation_id',
        'valuation_payments_employee_payment_type',
        'valuation_payments_employee_employee_id',
        'valuation_payments_employee_amount',
        'valuation_payments_employee_date_paid',
        'valuation_payments_employee_date_created',
        'valuation_payments_employee_date_updated',
        'valuation_payments_employee_created_by',
        'valuation_payments_employee_updated_by'
    ];

    public function valuation()
    {
        return $this->belongsTo(Valuation::class, 'valuation_payments_employee_valuation_id', 'valuation_id');
    }
    
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'valuation_payments_employee_employee_id', 'employee_id');
    }
}
