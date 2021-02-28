<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
   use HasFactory;

   /**
    * Obtiene la Version asociado a ese Vehicle
    */
   public function version()
   {
      return $this->belongsTo(Version::class);
   }

   /** 
    * Obtiene la Category asociado a ese Vehicle
    */
   public function category()
   {
      return $this->belongsTo(Category::class);
   }

   /**
    * Obtiene los rides que ha hecho ese vehículo
    */
   public function rides()
   {
      return $this->hasMany(Ride::class);
   }

   /**
    * La tabla rides se puede ver como una relación n:m de las tablas customers y vehicles o drivers y vehicles
    * Podemos utilizar los métodos asociados a las relaciones Many to many en el caso de que nos resultaran útiles
    */

   /**
    * Para obtener los customer que se han montado en el vehicle
    */

    public function customers()
    {
       return $this->belongsToMany(Customer::class, 'rides');
    }
 
    /**
     * Para obtener los drivers que han llevado el vehicle
     */
 
    public function drivers()
    {
       return $this->belongsToMany(Driver::class, 'rides');
    }
}
