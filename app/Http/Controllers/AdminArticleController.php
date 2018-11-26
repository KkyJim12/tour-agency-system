<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\ArticleCat;

class AdminArticleController extends Controller
{
    public function AdminCreateArticleProcess(Request $request) {

      /* Validate First */

      $request->validate([
      'article_title' => 'required|max:255',
      'article_sort' => 'required',
      'article_img' => 'required|max:2048|image',
      'article_cat' => 'required',
      ]);

      /*End Validate */

      $this_article = ArticleCat::find($request->article_cat);
      $article = new Article;
      $article->article_title = $request->article_title;
      $article->article_content = $request->article_content;
      $article->article_cat_id = $this_article->_id;
      $article->article_cat_name = $this_article->article_cat_name;
      $article->article_sort = $request->article_sort;
      $article->article_hide = $request->article_hide;

      /* upload image */

      if ($request->hasFile('article_img')) {
        $image = $request->file('article_img');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/assets/img/upload/article');
        $image->move($destinationPath, $name);
        $article->article_img = $name;
      }

      $article->save();

      return redirect()->route('admin-article');
    }

    public function AdminEditArticleProcess(Request $request) {

      /* Validate First */

      $request->validate([
      'article_title' => 'required|max:255',
      'article_sort' => 'required',
      'article_img' => 'max:2048|image',
      'article_cat' => 'required',
      ]);

      /*End Validate */

      $this_article = ArticleCat::find($request->article_cat);

      $article = Article::find($request->article_id);
      $article->article_title = $request->article_title;
      $article->article_content = $request->article_content;
      $article->article_cat_id = $this_article->_id;
      $article->article_cat_name = $this_article->article_cat_name;
      $article->article_sort = $request->article_sort;
      $article->article_hide = $request->article_hide;

      /* upload image */

      if ($request->hasFile('article_img')) {
        $image = $request->file('article_img');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/assets/img/upload/article');
        $image->move($destinationPath, $name);
        $article->article_img = $name;
      }

      $article->save();

      return redirect()->route('admin-article');
    }

    public function AdminDeleteArticleProcess(Request $request) {

      $article = Article::find($request->article_id);
      $article->delete();
      return redirect()->route('admin-article');
    }
}
