<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
      $people = ['Taylor', 'Matt', 'Jeffery'];
      return view ('pages.test', compact ('people'));
    }

    public function about()
    {
      return 'About Page'; //or a view could be returned
    }
}
