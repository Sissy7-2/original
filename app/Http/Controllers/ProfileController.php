<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
  // 以下を追記
  public function add()
  {
      return view('profile');
  }

}