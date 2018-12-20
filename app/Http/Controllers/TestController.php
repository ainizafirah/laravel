<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    
    public function index ()
    {
    	$tests = Test::all();

    	return $tests; 

    	return view ('tests.index') ;
    }
    public function create ()
    {
       return view ('tests.create');
    }

    public function show ($id)
    {
     $tests = Test::find($id);
     return view ('tests.show', compact('tests'));
    }

    public function edit ($id)
    {
      $tests = Test::find ($id);

      return view ('tests.edit', compact('tests')) ;
    }

    public function update ($id)
    {
     $tests = Test::find ($id);

     $tests->item = request('item');
     $tests->description = request('description');

     $tests->save ();

     return redirect ('/tests');
    }

    public function destroy ($id)
    {
     Test::find($id)->delete();

     return redirect ('/tests');
    }
    public function store ()
    {
    	$tests = new test ();
    	$tests -> item = request ('item');
    	$tests -> description = request ('description');

        $tests -> save ();

        return redirect ('/tests');

    }
}

