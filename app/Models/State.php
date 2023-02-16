<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $table= 'states';
    protected $fillable= ['id', 'name', 'country_id'];
    protected $dates= ['created_at','updated_at'];

    public function countries(){

        return $this->belongsTo(Country::class);

    }

    public function cities(){
        return $this->hasMany(City::class);
    }





}
