<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page1Camp extends Model
{
    use HasFactory;
    protected $table='page_1_camp';
    protected $fillable=['id','link_id','date','ctr_page_1','click_page_1','cost_page_1','cpc_page_1','unit_cost','created_at','updated_at'];
}
