<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {

    public function index()
    {
	$title = "Welcome to Puu's world";
//	return view('pages.index', compact('title'));
	return view('pages.index')->with('title', $title);
//	what we want to call var inside the view, var (esp for array)
    }

    public function about()
    {
	$title = 'About us';
	return view('pages.about', compact('title'));
    }

    public function services()
    {
	$data = array(
	    'title'=>'Services',
	    'services'=> ['Web Design','SEO',"Programming"]
	);
	return view('pages.services')->with($data);
    }

}
