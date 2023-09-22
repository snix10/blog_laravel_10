<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BlogTableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/dashboard/index',[
            'blogs' => blog::where('user_id',auth()->user()->id)->get(),
            'laman' => "TABEL BLOG"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/dashboard/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(blog $blog)
    
    {
        
        return view('dashboard.show',[
            "blogs" =>  $blog,
            "laman"  => "BLOG"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blog $blog)
    {
        //
    }
}
