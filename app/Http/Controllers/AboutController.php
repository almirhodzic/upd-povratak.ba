<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class AboutController extends Controller
{
   public function index()
   {
      $path = 'gallery/about';
      $files = File::allFiles($path);

      return view('pages.about')->with(['files'=> $files]);;

      /*$path = 'gallery/about';
      $files = File::allFiles($path);

      return view('galerie')->with(['files'=> $files]);*/
   }
}
