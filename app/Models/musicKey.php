<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class musicKey extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'transpositionDown', 'transpositionUp', 'chord1', 'chord2', 'chord3', 'chord4', 'chord5', 'chord6', 'chord7'];
    protected $primaryKey = 'id';
    public $timestamps = true;
}
