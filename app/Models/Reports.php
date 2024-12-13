<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    use HasFactory;
    protected $table='reports';
    protected $fillable=[
    'id','timestamp','query','referrer','lpurl','ip','event','iframeSrc','fbclid','track_id','gads','page','ny','rs','clkt','nx','nm','rsToken','site','is','locale','nb','slug','rurl','category','sheetsname','sfnsn','referrer2','qsrc','gtm_debug','utm_id','utm_campaign','utm_content','utm_term','utm_source','utm_medium','src','from','created_at','updated_at'
    ];
}
