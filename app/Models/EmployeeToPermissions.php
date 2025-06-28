<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmployeeToPermissions extends Model
{
    protected $table = 'employee_to_permissions';
    protected $primaryKey = 'employee_to_permissions_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'employee_id',
        'employee_permissions_id'
    ];

    // Relationships --done
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'employee_id');
    }

    public function permission(): BelongsTo
    {
        return $this->belongsTo(EmployeePermissions::class, 'employee_permissions_id', 'employee_permissions_id');
    }
}
