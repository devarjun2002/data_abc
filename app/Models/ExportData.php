<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExportData extends Model
{
    protected $table = 'export_data';
    protected $primaryKey = 'export_data_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        'export_data_date_exported' => 'datetime',
        'export_data_last_invoice_posted_date' => 'datetime',
        'export_data_last_invoice_credit_posted_date' => 'datetime',
        'export_data_last_bacs_file_entry_date' => 'datetime',
    ];

    protected $fillable = [
        'export_data_type',
        'export_data_date_exported',
        'export_data_last_invoice_posted_date',
        'export_data_last_invoice_credit_posted_date',
        'export_data_last_bacs_file_entry_date'
    ];

    // Relationships --done
    // Scope for recent exports
    public function scopeRecent($query, $days = 30)
    {
        return $query->where('export_data_date_exported', '>=', now()->subDays($days));
    }

    // Scope for exports by type
    public function scopeByType($query, $type)
    {
        return $query->where('export_data_type', $type);
    }

    // Accessor for export age in days
    public function getExportAgeDaysAttribute(): ?int
    {
        if ($this->export_data_date_exported) {
            return $this->export_data_date_exported->diffInDays(now());
        }
        return null;
    }

    // Accessor for days since last invoice posted
    public function getDaysSinceLastInvoiceAttribute(): ?int
    {
        if ($this->export_data_last_invoice_posted_date) {
            return $this->export_data_last_invoice_posted_date->diffInDays(now());
        }
        return null;
    }

    // Accessor for days since last invoice credit posted
    public function getDaysSinceLastInvoiceCreditAttribute(): ?int
    {
        if ($this->export_data_last_invoice_credit_posted_date) {
            return $this->export_data_last_invoice_credit_posted_date->diffInDays(now());
        }
        return null;
    }

    // Accessor for days since last BACS file entry
    public function getDaysSinceLastBacsFileAttribute(): ?int
    {
        if ($this->export_data_last_bacs_file_entry_date) {
            return $this->export_data_last_bacs_file_entry_date->diffInDays(now());
        }
        return null;
    }
}
