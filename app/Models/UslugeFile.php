<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UslugeFile extends Model
{
    public $timestamps=false;
    use HasFactory;
    protected $fillable=[
        'usluge',
        'type',
        'file',
    ];
}
