<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Narudzba extends Model
{
    public $timestamps=false;
    use HasFactory;
    protected $fillable = [
        'datum',
        'proizvod',
        'proizvodjac',
        'adresa',
    ];
}
