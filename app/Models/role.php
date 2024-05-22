<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // Relation avec le modèle d'utilisateur
    public function users()
    {
        return $this->hasMany(User::class);   //un seule role revient au plusieurs users
    }
}
