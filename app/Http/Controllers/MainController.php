<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
  {
    return view('/welcome');
  }
  public function About()
  {
    return view('/home/about');
  }

  public function feature()
  {
    return view('/home/features');
  }
  public function contect()
  {
    return view('/home/contact');
  }


}