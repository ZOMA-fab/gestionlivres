<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;
    protected $fillable= [
        'uuid', 
        'titre', 
        'auteur',
        'prix', 
        'quantite', 
    ];
}
