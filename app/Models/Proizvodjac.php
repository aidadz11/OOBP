<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proizvodjac extends Model
{
    public $timestamps=false;
    use HasFactory;
     /**
     * The atributes that are mass assignable.
     * 
     * @var string[]
     */
    protected $fillable = [
        'imeproizvodjaca',
        'adresa',
    ];
}
