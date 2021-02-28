<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * Obtiene las versiones de coches de la marca
     */

     public function versions(){
        return $this->hasMany(Version::class);
     }
}
