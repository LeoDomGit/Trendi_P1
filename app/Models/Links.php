<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    use HasFactory;
    protected $table='links';
    protected $fillable=['id','id_link','subject','link','date_created','update_dashboard','fb_camp_date','status','created_at','updated_at'];
}
