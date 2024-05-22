<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    use HasFactory;

    protected $fillable = ['publication_id', 'lot_number', 'description'];

    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }
}
