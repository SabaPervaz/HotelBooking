<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    use HasFactory;

    protected $table= 'category_post';
    protected $fillable = ['id', 'category_id', 'post_id'];
    protected $dates= ['created_at', 'updated_at'];

    public function posts(){
        return $this->belongsTo(Post::class);
    }

    public function categories(){
        return $this->belongsTo(Category::class);
    }

}
