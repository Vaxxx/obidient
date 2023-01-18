<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
       {
          return View('pages.index');
       }
       public function about()
       {
          return View('pages.about');
       }
    public function contact()
       {
          return View('pages.contact');
       }
}
