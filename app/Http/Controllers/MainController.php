<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
      return view('pages.main');
    }
    public function one()
    {
      return view('pages.one');
    }
    public function two()
    {
      return view('pages.two');
    }
    public function three()
    {
      return view('pages.three');
    }
    public function four()
    {
      return view('pages.four');
    }
    public function five()
    {
      return view('pages.five');
    }
    public function six()
    {
      return view('pages.six');
    }
    public function seven()
    {
      return view('pages.seven');
    }
    public function wel()
    {
      return view('welcome');
    }
}
