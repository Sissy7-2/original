<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
  // 以下を追記
  public function add()
  {
      return view('about');
  }

}