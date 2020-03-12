<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Movie;
class MovieController extends Controller
{
    //
    public function add()
  {
      return view('admin.movie.create');
  }
  
  public function create(Request $request)
  {
       // Varidationを行う
        $this->validate($request, User::$rules);
        $user = new User;
        $form = $request->all();
        // formに画像があれば、保存する
        if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $user->image_path = basename($path);
      } else {
          $user->image_path = null;
      }
      
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);

      // データベースに保存する
      $user->fill($form);
      $user->save();

      return redirect('admin/movie/create');
  }
  
}