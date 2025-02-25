<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employes extends Model
{
    use HasFactory;


    public function departement(){
        return $this->belongsTo(Departement::class);
    }
}
