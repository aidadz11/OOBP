<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usluge extends Model
{
    public $timestamps = false;
    use HasFactory;
    /**
     * The atributes that are mass assignable.
     * 
     *  @var string[]
     */
    protected $fillable = [
        'nazivusluge',
        'cijenausluge',
        'trajanjeusluge',
        'vrstausluge',
        'doktor'
    ];
}