<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //every thing is fillable except propreties in garded table
    protected $guarded=['id'];

    //only propreties in the table can be fillable
    //protected $fillable=['title'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo( User::class);
    }
}
