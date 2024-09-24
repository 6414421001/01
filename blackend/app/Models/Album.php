<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Album extends Model
{
    use HasFactory;
    protected $table = 'album';
    protected $fillable = [
      'album_name',
      'album_pdf',
      'person_name',
      'song_date',
  ];
    
      public function Mu()
    {
        return $this->belongsTo(Mu::class,'album_name');
    }
}
