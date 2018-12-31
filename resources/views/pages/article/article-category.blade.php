@extends('layouts.master')
@section('title')
Royaltour | บทความ {{$this_article_cat->article_cat_name}}
@endsection
@section('meta')
Royaltour | ภาพประทับใจ {{$this_article_cat->article_cat_name}}
@endsection
@section('content')
<div class='articlePage'>
  <div class="banner">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
          <div class="titleBanner">
            <h1>Royal Tour And Travel</h1>
            <p>{{$this_article_cat->article_cat_name}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-4">
     <div class="row">
        <div class="col-12">
           <h3 class="title"><img src='/assets/img/home/icn-article.png' class='icon-title'>{{$this_article_cat->article_cat_name}}</h3>
        </div>
     </div>
     <div class="row mt-3 category">
       @foreach($show_article as $show_all_article_cat)
       <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
          <a href="/article/{{$show_all_article_cat->article_cat_id}}/{{$show_all_article_cat->article_title}}">
             <div class='list'>
               <figure>
                 <img src="/assets/img/upload/article/{{$show_all_article_cat->article_img}}" alt="Card image cap">
               </figure>
                <div>
                   <h5 class="card-title">{{str_limit($show_all_article_cat->article_title,50)}}</h5>
                </div>
             </div>
          </a>
       </div>
       @endforeach
     </div>
  </div>
</div>
@endsection
