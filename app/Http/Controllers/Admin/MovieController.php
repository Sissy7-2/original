<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{
    //
    public function add()
  {
      return view('admin.movie.create');
  }
  
  public function create(Request $request)
  {
      // admin/news/createにリダイレクトする
      return redirect('admin/movie/create');
  }  
  
}