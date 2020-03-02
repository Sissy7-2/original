<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailsController extends Controller
{
  // 以下を追記
  public function add()
  {
      return view('details');
  }

}