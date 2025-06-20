<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationUpdates extends Model
{
    protected $table = 'application_updates';
    protected $primaryKey = 'application_updates_id';
    public $timestamps = false;
    protected $fillable = [];

    public function applicant()
    {
        return $this->belongsTo(Applicant::class, 'applicant_updates_applicant_id', 'applicant_id');
    }

    public function application()
    {
        return $this->belongsTo(Application::class, 'application_id', 'application_id');
    }
}
