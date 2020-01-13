@extends('layouts.master')
@section('title')
Royaltour | บทความ
@endsection
@section('meta')
Royaltour | บทความ
@endsection
@section('content')
<div class='articlePage'>
  <div class="banner" style="background:url('{{$article_banner->content}}') no-repeat center center; background-size: cover;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
          <div class="titleBanner">
            <p>- บทความ -</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-4">
    <div class="row">
      <div class="col-12">
        <h3 class="title"><img src='/assets/img/home/icn-article.png' class='icon-title'>หมวดหมู่บทความ</h3>
      </div>
    </div>
    <div class="row mt-3">
      @foreach($article_cat as $show_article_cat)
      <div class="col-sm-6 col-md-4 col-lg-3 article-category">
        <a href="/article/{{$show_article_cat->_id}}">
          <img class="article-category" src="/assets/img/upload/article/category/{{$show_article_cat->article_cat_img}}" alt="article-category">
        </a>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection