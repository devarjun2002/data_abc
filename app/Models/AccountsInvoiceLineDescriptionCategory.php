<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsInvoiceLineDescriptionCategory extends Model
{
    protected $table = 'accounts_invoice_line_description_category';
    protected $primaryKey = 'invoice_line_description_category_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'invoice_line_description_category_name',
        'invoice_line_description_category_sort'
    ];
    // Reverse Relationships
public function accountsInvoiceLineDescriptions()
    {
        return $this->hasMany(AccountsInvoiceLineDescription::class, 'invoice_line_description_category', 'invoice_line_description_category_id');
    }
}