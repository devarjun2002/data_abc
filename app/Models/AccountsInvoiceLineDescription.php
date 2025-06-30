<?php

namespace App\Models;
use App\Models\AccountsInvoiceLineDescriptionCategory;
use App\Models\AccountsNominalCode;

use Illuminate\Database\Eloquent\Model;

class AccountsInvoiceLineDescription extends Model
{
    protected $table = 'accounts_invoice_line_description';
    protected $primaryKey = 'invoice_line_description_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'invoice_line_description_name',
        'invoice_line_description_sort',
        'invoice_line_nominal_code',
        'invoice_line_description_category',
        'invoice_line_description_amount'
    ];

    // Relationships --done
    public function nominalCode()
    {
        return $this->belongsTo(AccountsNominalCode::class, 'invoice_line_nominal_code', 'nominal_code_id');
    }

    public function category() 
    {
        return $this->belongsTo(AccountsInvoiceLineDescriptionCategory::class, 'invoice_line_description_category', 'invoice_line_description_category_id');
    }
}
