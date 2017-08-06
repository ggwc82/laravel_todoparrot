<?php

namespace Todoparrot\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function index()
    {
      $lists = [];
      // $lists = ['Vacation planning', 'Grocery shopping', 'Camping trip'];
      return view('welcome')->with('lists', $lists);
    }

}
