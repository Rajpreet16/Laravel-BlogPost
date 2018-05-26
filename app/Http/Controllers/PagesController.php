<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel';
        #return view('pages.index', compact('title'));
        return view('pages.index')->with('title' , $title);
    }

    public function about(){
        return view('Pages.about');
    }

    public function contact(){
        return view('Pages.contact');
    }

    public function services(){
        $data = array(
        'title' => 'Services',
        'serviceprovided' => ['Social Communication','Be a Developer','SEO']
        );
        return view('Pages.services')->with($data);
    }
}
