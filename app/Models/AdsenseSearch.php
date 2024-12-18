<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdsenseSearch extends Model
{
    use HasFactory;
    protected $table = 'adsense_search';
    protected $fillable = [
        'link_id',
        'date',
        'request',
        'impressions',
        'ecpm',
        'clicks',
        'pub_revenue',
        'unit_cost',
        'created_at',
        'updated_at'
    ];
    protected $dates = [
        'date',
        'created_at',
        'updated_at'
    ];
}
