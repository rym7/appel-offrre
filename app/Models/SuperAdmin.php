<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperAdmin extends Model
{
    
    use HasFactory;

    protected $fillable = [
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class); //est utilisée pour définir une relation où la clé étrangère est sur le modèle
    }  //1 seul user
    
}
