<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fillable=['title','description','category_id','price','img'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function consoles(){
        return $this->belongsToMany(Console::class);
    }
}
