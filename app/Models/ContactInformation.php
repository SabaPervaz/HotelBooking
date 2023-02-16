<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInformation extends Model
{
    use HasFactory;

    protected $table= 'contact_information';
    protected $fillable= ['id', 'pincode', 'near_by', 'tel_no', 'extra_detail', 'contact_id'];
    protected $dates= ['created_at', 'updated_at'];


    public function contact(){

        return $this->belongsTo(Contact::class);
    }


}
