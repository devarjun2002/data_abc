<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guarantor extends Model
{
    protected $table = 'guarantor';
    protected $primaryKey = 'guarantor_id';
    public $timestamps = false;
    protected $guarded = [];

    public function incomes()
    {
        return $this->hasMany(GuarantorIncome::class, 'guarantor_id', 'guarantor_id');
    }
}
