<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'songBeginCdur', 'openSongText'];
    protected $primaryKey = 'id';
    public $timestamps = true;


    public function musicKey()
    {
        return $this->belongsTo(MusicKey::class);
    }

    public function songComment(){
        return $this->hasMany(songComment::class);
    }

}
