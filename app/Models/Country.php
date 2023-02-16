<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table= 'countries';
    protected $fillable= ['id', 'name'];
    protected $dates= ['created_at', 'updated_at'];

    public function states(){
        return $this->hasMany(State::class);
    }

    public function cities(){
        return $this->hasManyThrough(City::class, State::class);
    }
}
