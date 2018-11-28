@extends('layouts.master')

@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
      <h3>บทความ "{{$this_article_cat->article_cat_name}}"</h3>
    </div>
  </div>
  <div class="row">
    @foreach($show_article as $show_all_article_cat)
      <div class="col-md-4 mt-3">
        <a href="/article/{{$show_all_article_cat->article_cat_id}}/{{$show_all_article_cat->_id}}">
        <div class="card" style="width:100%;">
          <img class="card-img-top article-category-img" src="/assets/img/upload/article/{{$show_all_article_cat->article_img}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{str_limit($show_all_article_cat->article_title,50)}}</h5>
          </div>
        </div>
        </a>
      </div>
    @endforeach
  </div>
</div>
@endsection
