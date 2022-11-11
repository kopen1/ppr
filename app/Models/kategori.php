<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $fillable = [
      'name','slug'
      ];
    
    public function post(){
      return $this->hasMany(postingan::class);
    }
    
    public function getRouteKeyName(){
      return 'slug';
    }
    
}
