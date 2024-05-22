<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'password',
        'role_id',
    ];

    // Relation avec le modèle de rôle
    public function role()
    {
        return $this->belongsTo(Role::class);    //revient au 1 seul role
    }
   
    public function admin()
    {
        return $this->hasOne(Admin::class);
    }


    public function favoris()
    {
        return $this->belongsToMany(Publication::class, 'favoris', 'user_id', 'publication_id')->withTimestamps();
          //définir une relation many-to-many entre l'utilisateur et les publications
    }

    

}
