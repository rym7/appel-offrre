<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'titre',
        'etat',
        'type',
        'secteur_id',
        'wilaya',
        'date_publication',
        'date_limite',
        'date_prolongation',
        'description',
    ];

    // Relation avec la table des secteurs
    public function secteur()
    {
        return $this->belongsTo(Secteur::class);  //ca revient a un seul secteur 
       }

     public function favoris()
     {
        return $this->belongsToMany(User::class, 'favoris', 'publication_id', 'user_id')->withTimestamps();
       }

       public function lots()
       {
           return $this->hasMany(Lot::class);   //un seule role revient au plusieurs users
       }
     public function documents()
    {
        return $this->hasMany(Document::class);
       }

}
