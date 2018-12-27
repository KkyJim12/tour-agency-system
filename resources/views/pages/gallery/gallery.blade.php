@extends('layouts.master')
@section('title')
Royaltour | ภาพประทับใจ
@endsection
@section('meta')
Royaltour | ภาพประทับใจ
@endsection
@section('content')
<div class="galleryPage">
  <div class="banner">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
          <div class="titleBanner">
            <h1>Royal Tour And Travel</h1>
            <p>- ภาพประทับใจ -</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-4">
    <div class="row">
      <div class="col-12">
        <h3 class="title"><img src='/assets/img/home/icn-camera.png' class='icon-title'>ภาพความประทับใจ</h3>
      </div>
    </div>
  </div>
  <div class="container list">
    <div class="row">
      @foreach($continent as $show_continent)
      <div class="col-12 mb-3">
        <h1>{{$show_continent->continent_name}}</h1>
      </div>
      @foreach($show_continent->subcat as $subcat)
      <div class="col-3">
        <a class="card-body-link" href="/gallery/{{$subcat->_id}}">
           <section>
             <figure class='mb-0'>
               <img src="/assets/img/upload/country/{{$subcat->country_img}}" alt="country_img">
             </figure>
              <div class="card-body">
                 <p class="card-text">{{$subcat->country_name}}</p>
              </div>
           </section>
        </a>
      </div>
      @endforeach
      @endforeach
    </div>
  </div>
</div>
@endsection
