<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = [
        'user_id',
        'total_amount',
        'status',
    ];

   public function hold()
   {
       return $this->belongsTo(Holds::class);
   }
 
}
