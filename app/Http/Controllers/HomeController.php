<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\Post;
use App\Models\Category;
use App\Models\Country;
use App\Models\City;
use App\Models\State;

use Illuminate\Http\Request;

class HomeController extends Controller
{

public function teacher(){
    // one to one

    $teacher= Teacher::with('contact')->get();
    // dd($teacher->toArray());

    // one to many

    // $teacher= Teacher::with('posts')->first();
    // dd($teacher->toArray());

    // many to many
    $categories= Category::all();

  $posts= Post::with('categories')->first();
    $posts->categories()->detach([1,2,3]);
    // dd( $posts->toArray());

    // has one through


    $teacher= Teacher::with('contact.contactInformation')->first();
    $teacher= Teacher::with('contactInformation')->first();

    // has through many

    $coutry= Country::with('cities')->first();
     dd( $coutry->toArray());
}
}
