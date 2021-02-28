<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    /**
     * Obtiene el User asociado al Customer. Relación uno a uno. Generalización especialización
     */
    public function user(){
       return $this->hasOne(User::class, 'id');
    }

    /**
     * Esta función sería equivalente a la anterior
     */
    public function user2(){
       return $this->belongsTo(User::class, 'id', 'id');
    }

    /**
     * Obtiene los Rides que ha hecho este Customer
     */
    public function rides()
    {
       return $this->hasMany(Ride::class);
    }

    /**
    * La tabla rides se puede ver como una relación n:m de las tablas customers y vehicles o customer y drivers
    * Podemos utilizar los métodos asociados a las relaciones Many to many en el caso de que nos resultaran útiles
    */

   /**
    * Para obtener los vehiculos en los que se ha montado el customer
    */

   public function vehicles()
   {
      return $this->belongsToMany(Vehicle::class, 'rides');
   }

   /**
    * Para obtener los drivers a los que ha llevado el customer
    */

   public function drivers()
   {
      return $this->belongsToMany(Driver::class, 'rides');
   }
}
