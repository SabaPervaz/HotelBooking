<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table= 'categories';
    protected $fillable= ['id', 'name'];
    protected $dates= ['created_at', 'updated_at'];

    public function posts(){

        return $this->belongsToMany(Post::class);
    }

    public function postCategories(){

        return $this->belongsToMany(PostCategory::class);
    }
}


