@extends('layouts.master')
@section('title')
Royaltour | ภาพประทับใจ
@endsection
@section('meta')
Royaltour | ภาพประทับใจ
@endsection
@section('content')
<div class="jumbotron jumbotron-fluid" style="background:url('/assets/img/components/image_bg_7.jpg'); text-align:center; color:white;">
   <div class="container">
      <h1>ภาพประทับใจ</h1>
      <p>หน้าแรก > ภาพประทับใจ</p>
   </div>
</div>
<div class="container">
   <div class="row">
      @foreach($continent as $show_continent)
      <div class="col-md-12 mt-5">
         <h3>{{$show_continent->continent_name}}</h3>
      </div>
   </div>
   <hr>
   <div class="row">
      @foreach($show_continent->subcat as $subcat)
      <div class="col-md-2 mt-3">
         <a class="card-body-link" href="/gallery/{{$subcat->_id}}">
            <div class="card" style="width: 100%;">
               <img class="card-img-top gallery-img" src="/assets/img/upload/country/{{$subcat->country_img}}" alt="country_img">
               <hr>
               <div class="card-body">
                  <p class="card-text">{{$subcat->country_name}}</p>
               </div>
            </div>
         </a>
      </div>
      @endforeach
      @endforeach
   </div>
</div>
</div>
@endsection
