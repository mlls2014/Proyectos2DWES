<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
   use HasFactory;

   /**
    * Obtiene el User asociado al Customer. Relación uno a uno. Generalización especialización
    */
   public function user()
   {
      return $this->hasOne(User::class, 'id');
   }

   /**
    * Esta función sería equivalente a la anterior
    */
   public function user2()
   {
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
    * La tabla rides se puede ver como una relación n:m de las tablas drivers y vehicles o drivers y customers
    * Podemos utilizar los métodos asociados a las relaciones Many to many en el caso de que nos resultaran útiles
    */

   /**
    * Para obtener los vehiculos en los que se ha montado el driver
    * Hay que tener en cuenta que la tabla n:m no sigue la convención de nombres de Laravel: se llama rides y no driver_vehicle
    */

   public function vehicles()
   {
      return $this->belongsToMany(Vehicle::class, 'rides');
   }

   /**
    * Para obtener los customers que ha llevado el driver
    * Hay que tener en cuenta que la tabla n:m no sigue la convención de nombres de Laravel: se llama rides y no customer_driver
    */

   public function customers()
   {
      return $this->belongsToMany(Customer::class, 'rides');
   }
}
