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
      
      // 以下を追記
      // Varidationを行う
      $this->validate($request, Movie::$rules);
      
      $movie = new Movie;
      $form = $request->all();
      
      // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $movie->image_path = basename($path);
      } else {
          $movie->image_path = null;
      }
      
       // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);

      // データベースに保存する
      $movie->fill($form);
      $movie->save();

      return redirect('admin/movie/create');
      
  }  
  
}