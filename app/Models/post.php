<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
   protected $fillable=['title','body','author'];
public function comments(){
    return $this->hasMany(comment::class);

}
}
