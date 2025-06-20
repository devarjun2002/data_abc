<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsInvoiceLineDescriptionCategory extends Model
{
    protected $table = 'accounts_invoice_line_description_category';
    protected $primaryKey = 'invoice_line_description_category_id';
    public $timestamps = false;
    protected $guarded = [];

    public function lineDescriptions()
    {
        return $this->hasMany(AccountsInvoiceLineDescription::class, 'invoice_line_description_category', 'invoice_line_description_category_id');
    }
}
