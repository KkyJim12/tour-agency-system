<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ArticleCat;

class AdminArticleCatController extends Controller
{

    /** Admin Create Article Category Process **/
    public function CreateArticleCatProcess(Request $request)  {

      $request->validate([
      'articlecat_name' => 'required|max:255',
      'articlecat_sort' => 'required',
      'articlecat_img' => 'required|max:2048|image',
      ]);

      $article_cat = new ArticleCat;
      $article_cat->article_cat_name = $request->articlecat_name;
      $article_cat->article_cat_sort = $request->articlecat_sort;
      $article_cat->article_cat_hide = $request->articlecat_hide;

      /* upload image */

      if ($request->hasFile('articlecat_img')) {
        $image = $request->file('articlecat_img');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/assets/img/upload/article/category');
        $image->move($destinationPath, $name);
        $article_cat->article_cat_img = $name;
      }

      $article_cat->save();

      return redirect()->route('admin-article-cat');
    }


    /** Admin Edit Article Category Process **/
    public function AdminEditArticleCatProcess(Request $request)  {

      $request->validate([
      'articlecat_name' => 'required|max:255',
      'articlecat_sort' => 'required',
      'articlecat_img' => 'max:2048|image',
      ]);

      $article_cat = ArticleCat::find($request->articlecat_id);
      $article_cat->article_cat_name = $request->articlecat_name;
      $article_cat->article_cat_sort = $request->articlecat_sort;
      $article_cat->article_cat_hide = $request->articlecat_hide;

      /* upload image */

      if ($request->hasFile('articlecat_img')) {
        $image = $request->file('articlecat_img');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/assets/img/upload/article/category');
        $image->move($destinationPath, $name);
        $article_cat->article_cat_img = $name;
      }

      $article_cat->save();

      return redirect()->route('admin-article-cat');
    }


    /** Admin Delete Article Category Process **/
    public function AdminDeleteArticleCatProcess(Request $request)  {
      $article_cat = ArticleCat::find($request->article_cat_id);
      $article_cat->delete();

      return redirect()->route('admin-article-cat');
    }
}
