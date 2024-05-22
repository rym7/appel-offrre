<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secteur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'emplacement',
    ];

    // Relation avec la table des publications
    public function publications()
    {
        return $this->hasMany(Publication::class);  //permettant à un secteur d'avoir plusieurs publications associées.
    }

    public function admins()
    {
        return $this->hasMany(Admin::class);  //permettant à un secteur d'avoir plusieurs padmins associées.
    }
}
