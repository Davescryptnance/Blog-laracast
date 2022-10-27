<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model

{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'slug',
        'title',
        'excerpt',
        'body',
    ];

    protected $guarded = [];


    protected $with = ['category', 'author'];


    public function category()
    {
       return $this->belongsTo(Category::class, 'category_id'); 
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



