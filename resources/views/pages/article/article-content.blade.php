@extends('layouts.master')
@section('title')
Royaltour | บทความ {{$article->article_title}}
@endsection
@section('meta')
Royaltour | ภาพประทับใจ {{str_limit($article->article_content,100)}}
@endsection
@section('content')
<div class='articlePage'>
  <div class="banner">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
          <div class="titleBanner">
            <p class='mb-3'>{{$article->article_cat_name}}</p>
            <h6>{{$article->article_title}}</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-8 panalLeft">
        <figure>
          <img class="article-img-content" src="/assets/img/upload/article/{{$article->article_img}}" alt="article_img">
        </figure>
        <h5 class="mt-3">{{$article->article_title}}</h5>
        {!!$article->article_content!!}
      </div>
      <div class="col-lg-4">
        <div class="panalRight">
          <div class="social">
            <h1>Social Link</h1>
            <div class="fb-share-button" data-layout="box_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">แชร์</a></div>
          </div>
          <div class="other">
            <h1>คิดจะเที่ยวคิดถึงรอยัลทัวร์</h1>
            @foreach($continent as $all_continent)
            <div class="row">
              <div class="col-12">
                <h2>{{$all_continent->continent_name}}</h2>
              </div>
              <hr>
              @foreach($all_continent->subcat as $subcat)
              <div class="col-6 iconCountry">
                <a class="country-link" href="/category/{{$subcat->_id}}">
                  <span><img class="tour-cat-img" src="/assets/img/upload/country/{{$subcat->country_img}}" alt="country_img"></span>
                  {{$subcat->country_name}}
                </a>
              </div>
              @endforeach
            </div>
            <hr>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection