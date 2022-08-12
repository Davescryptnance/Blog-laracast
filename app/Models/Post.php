<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model

{
    use HasFactory;

    protected $guarded = [];


    protected $with = ['category', 'author'];


    public function Category()
    {
       return $this->belongsTo(Category::class, 'categories_id'); 
    }

    public function Post()
    {
       return $this->belongsTo(Post::class); 
    }
 
    
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}


