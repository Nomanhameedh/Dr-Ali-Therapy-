<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    // CRUD main page
    public function show()
    {
        return view('crud'); // crud.blade.php
    }

    // Add Article page
    public function addArticle()  // <- ye method hona chahiye
    {
        return view('add'); // add.blade.php
    }
    
    public function saveArticle(Request $request)
{
    dd($request->all());
}

}
