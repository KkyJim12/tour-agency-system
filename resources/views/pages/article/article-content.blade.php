@extends('layouts.master')

@section('title')
Royaltour | บทความ {{$article->article_title}}
@endsection

@section('meta')
Royaltour | ภาพประทับใจ {{str_limit($article->article_content,100)}}
@endsection

@section('content')
<div class="jumbotron jumbotron-fluid" style="background:url('/assets/img/components/image_bg_7.jpg'); text-align:center; color:white;">
  <div class="container">
    <h1>บทความ</h1>
    <p>หน้าแรก > บทความ > {{$article->article_cat_name}} > {{$article->article_title}}</p>
  </div>
</div>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-9">
      <img class="article-img-content" src="/assets/img/upload/article/{{$article->article_img}}" alt="article_img">
      <h5 class="mt-3">{{$article->article_title}}</h5>
      {!!$article->article_content!!}
    </div>
    <div class="col-md-3">
      <div class="fb-share-button" data-layout="box_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">แชร์</a></div>
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
            <a class="country-link" href="/category/{{$all_country->_id}}">
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
