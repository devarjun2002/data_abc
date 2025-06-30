<?php

namespace App\Models;
use App\Models\AccountsTenantCharge;
use App\Models\AccountsTenantChargeLineType;
use App\Models\AccountsVatRate;

use Illuminate\Database\Eloquent\Model;

class AccountsTenantChargeLine extends Model
{
    protected $table = 'accounts_tenant_charge_line';
    protected $primaryKey = 'tenant_charge_line_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'tenant_charge_id',
        'tenant_charge_line_type',
        'tenant_charge_line_description',
        'tenant_charge_line_amount',
        'tenant_charge_line_vat_rate',
        'tenant_charge_line_vat_amount'
    ];

    // Relationships --done
    public function tenantCharge()
    {
        return $this->belongsTo(AccountsTenantCharge::class, 'tenant_charge_id', 'tenant_charge_id');
    }

    public function lineType() 
    {
        return $this->belongsTo(AccountsTenantChargeLineType::class, 'tenant_charge_line_type', 'tenant_charge_line_type_id');
    }

    public function vatRate()
    {
        return $this->belongsTo(AccountsVatRate::class, 'tenant_charge_line_vat_rate', 'vat_rate_id');
    }
}
