<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurveyStatus extends Model
{
    protected $table = 'survey_status';
    protected $primaryKey = 'survey_status_id';
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [];

    protected $fillable = [
        'survey_status_name',
        'survey_status_sort'
    ];
    // Reverse Relationships
public function propertyOfferSales()
    {
        return $this->hasMany(PropertyOfferSale::class, 'property_offer_sale_survey', 'survey_status_id');
    }
}