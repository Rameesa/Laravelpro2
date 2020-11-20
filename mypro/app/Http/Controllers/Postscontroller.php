<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Facades\Storage;
use Illuminate\Support\Str;

class Postscontroller extends Controller
{
  public function fn_file(){
      return view('file');
  }
  public function fn_new(){
    return view('new');
  }

  
}
