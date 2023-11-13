<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;

    protected $table = 'chambre';

    protected $fillable = ['libchambre', 'statut'];

    // Rest of your model code...
}
