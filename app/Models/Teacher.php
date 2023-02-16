<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teachers';
    protected $fillable = ['id', 'name', 'email'];
    protected $dates = ['created_at', 'updated_at'];

    public function contact()
    {
        return $this->hasOne(Contact::class);
    }

    public function posts()
    {

        return $this->hasMany(Post::class);
    }

    public function contactInformation(){

        return $this->hasOneThrough(ContactInformation::class, Contact::class);
    }
}
