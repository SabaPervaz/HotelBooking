<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = ['id', 'title', 'desc', 'teacher_id'];
    protected $dates = ['created_at', 'updated_at'];

    public function teachers()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    public function categories(){

        return $this->belongsToMany(Category::class);
    }

   
}
