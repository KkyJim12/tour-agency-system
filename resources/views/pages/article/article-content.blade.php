@extends('layouts.master')

@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col-md-9">
      <img class="article-img-content" src="/assets/img/upload/article/{{$article->article_img}}" alt="article_img">
      <h5>{{$article->article_title}}</h5>
      {!!$article->article_content!!}
    </div>
    <div class="col-md-3">
      <hr>
      <div>
        @foreach($article_cat as $show_article_cat)
          <a href="/article/{{$show_article_cat->_id}}">{{$show_article_cat->article_cat_name}}</a>
        @endforeach
      </div>
      <hr>
      <h5>คิดจะเที่ยวคิดถึงรอยัลทัวร์</h5>
      @foreach($continent as $show_continent)
        <p class="mt-3">{{$show_continent->continent_name}}</p>
        <hr>
        <div class="row">
          @foreach($show_continent->subcat as $all_country)
          <div class="col-md-6">
            <a href="/category/{{$all_country->_id}}">
            <img style="width:40%;" src="/assets/img/upload/country/{{$all_country->country_img}}" alt="">
            {{$all_country->country_name}}
            </a>
          </div>
          @endforeach
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
