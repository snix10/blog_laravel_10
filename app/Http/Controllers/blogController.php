<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\blog;
use App\Models\category;
use App\Models\User;

class blogController extends Controller
{
    public function index()
   {

     $title='';
     if(request('category')) {
        $category= category::firstWhere('slug', request('category'));
        $title = ' in ' . $category->name;
     }

     if(request('author')) {
        $author = user::firstWhere('username', request('author'));
        $title = ' by ' . $author->name;
     }

        return view('blogs', [
            "title"  => "BLOG" . $title,
            // "blogs"  => blog::all()
            "blogs"  => blog::latest()->cari(request(['search','category','author']))->paginate(7)->withQueryString(),
            
        ]);
    }
    public function show(Blog $blog)
    {
        return view('baca', [
            "title"  => "baca blog",
            "blogs"  => $blog,
           
        ]);
    }
}

