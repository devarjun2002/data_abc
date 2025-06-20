<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsTenantChargeLine extends Model
{
    protected $table = 'accounts_tenant_charge_line';
    protected $primaryKey = 'tenant_charge_line_id';
    public $timestamps = false;

    protected $fillable = [
        'tenant_charge_id',
        'tenant_charge_line_type',
        'tenant_charge_line_description',
        'tenant_charge_line_amount',
        'tenant_charge_line_vat_rate',
        'tenant_charge_line_vat_amount'
    ];

    protected $casts = [
        'tenant_charge_line_amount' => 'decimal:2',
        'tenant_charge_line_vat_amount' => 'decimal:2'
    ];

    /**
     * Get the tenant charge this line belongs to.
     */
    public function tenantCharge()
    {
        return $this->belongsTo(AccountsTenantCharge::class, 'tenant_charge_id');
    }

    /**
     * Get the type of this charge line.
     */
    public function lineType()
    {
        return $this->belongsTo(AccountsTenantChargeLineType::class, 'tenant_charge_line_type');
    }

    /**
     * Get the VAT rate for this charge line.
     */
    public function vatRate()
    {
        return $this->belongsTo(AccountsVatRate::class, 'tenant_charge_line_vat_rate');
    }
}
