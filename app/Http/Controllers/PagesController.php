<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to Laravel!';
        return view('pages.index')->with('title', $title);
        // return view('pages.index', compact('title'));
    }

    public function about()
    {
        $title = 'About as';
        return view('pages.about')->with('title', $title);
    }


    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'Space travels']
        );
        return view('pages.services')->with($data);
    }
}
