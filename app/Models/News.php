<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'image',
        'content',
        'user_id'
    ];

    //Relationship to user
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
