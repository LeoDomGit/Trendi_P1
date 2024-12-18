<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchCamp extends Model
{
    use HasFactory;

    // Define the table name, as the model will default to the plural form of the model name
    protected $table = 'search_camp';

    // Define the fillable fields that are allowed for mass assignment
    protected $fillable = [
        'link_id',
        'date',
        'ctr_page_1',
        'click_page_1',
        'click_page_search',
        'cost_search',
        'unit_cost',
        'created_at',
        'updated_at',
    ];

    // If you want to use custom timestamps format or want to disable automatic timestamps, you can set them
    public $timestamps = true; // Default is true, if you don't want to use it, set it to false

    // If you're using a different format for the date (i.e., "Y-m-d"), you can use $dates property.
    protected $dates = ['date', 'created_at', 'updated_at'];
}
