<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class BookController extends Controller
{
    public function index()
    {
    	return view('book');
    }

    public function store(Request $request)
    {
    	// dd($request->all());

    	$validatedDate = $request->validate([
    		'email' => 'required|unique:people|email'
    	]);

    	$people = Person::updateOrCreate(
    		['email' => $validatedDate['email']]
    	);

    	return redirect()->route('success');
    }

    public function success()
    {
        return view('success');
    }
}
