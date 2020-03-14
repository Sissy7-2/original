<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopController extends Controller
{
  // 以下を追記
  public function add()
  {
      return view('top');
  }
  
  
  public function show() {
    
    $image_rand = array(["img/Righteye.JPG", "img/Lefteye.JPG"]);
    $image_rand = $image_rand[mt_rand(0, count($image_rand)-1)];
    echo '<img src="'.$image_rand.'" alt="">';
  }

}