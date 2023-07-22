<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = [
        'cycle',
        'niveau',
        'filiere',
        'nationalite',
        'anneeuniversitaire',
        'matricule',
        'nom',
        'prenom',
        'datenaissace',
        'genre',
        'email',
        'numero',
        'photo',
    ];
}
