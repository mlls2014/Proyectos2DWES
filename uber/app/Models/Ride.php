<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
   use HasFactory;

   /**
    * Obtiene el Driver asociado a ese Ride
    */
   public function driver()
   {
      return $this->belongsTo(Driver::class);
   }

   /** 
    * Obtiene el Customer asociado a ese Ride
    */
   public function customer()
   {
      return $this->belongsTo(Customer::class);
   }

   /** 
    * Obtiene el Vehicle asociado a ese Ride
    */
    public function vehicle()
    {
       return $this->belongsTo(Vehicle::class);
    }
}
