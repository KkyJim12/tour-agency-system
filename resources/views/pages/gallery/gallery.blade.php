@extends('layouts.master')

@section('content')
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
      <a href="/gallery/{{$subcat->_id}}">
      <div class="card" style="width: 100%;">
        <img class="card-img-top gallery-img" src="/assets/img/upload/country/{{$subcat->country_img}}" alt="country_img">
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
