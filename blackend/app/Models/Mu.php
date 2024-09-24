<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mu extends Model
{
    use HasFactory;
    protected $table = 'mu';
    protected $fillable = ['album_name','music_name','camp_name','person_date'];

    public function album()
    {
        return $this->belongsTo(Album::class,'album_name','album_name');
    }
}
