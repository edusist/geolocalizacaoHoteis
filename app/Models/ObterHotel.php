<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObterHotel extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'latitude', 'longitude', 'preco', 'distancia'];
}
