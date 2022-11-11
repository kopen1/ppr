<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postingan extends Model
{
    use HasFactory;
    protected $with = ['kategori','user'];
    protected $fillable = [
      'slug','judul','kategori_id','user_id','body'
      ];

     public function kategori(){   
     return $this->belongsTo(kategori::class);
    }
     public function user(){   
     return $this->belongsTo(User::class);
    }

    public function getRouteKeyName(){
      return 'slug';
    }
  
}
