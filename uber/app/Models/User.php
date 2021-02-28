<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
   use HasFactory, Notifiable;

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
      'name',
      'email',
      'password',
   ];

   /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
   protected $hidden = [
      'password',
      'remember_token',
   ];

   /**
    * The attributes that should be cast to native types.
    *
    * @var array
    */
   protected $casts = [
      'email_verified_at' => 'datetime',
   ];

   /**
    * The model's default values for attributes.
    *
    * @var array
    */
   protected $attributes = [
      'type' => 'N',
   ];

   /**
    * Obtiene el Driver asociado al User (si lo tiene). Relación uno a uno. Generalización especialización
    */
   public function driver()
   {
      return $this->hasOne(Driver::class, 'id');
   }

   /**
    * Obtiene el Customer asociado al User (si lo tiene). Relación uno a uno. Generalización especialización
    */
   public function customer()
   {
      return $this->hasOne(Customer::class, 'id');
   }
}
