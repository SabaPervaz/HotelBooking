<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';
    protected $fillable = ['id', 'address', 'phone', 'teacher_id'];
    protected $dates = ['created_at', 'updated_at'];

    public function teacher()
    {

        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    public function contactInformation(){
        return $this->hasOne(ContactInformation::class);
    }
}
