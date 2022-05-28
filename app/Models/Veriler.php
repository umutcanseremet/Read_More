<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veriler extends Model
{
    use HasFactory;
    protected $table='verilers';
    protected $fillable=['id','topic','writer','image'];
}
