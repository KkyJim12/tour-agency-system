@extends('layouts.master')

@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
      <h3 style="text-align:center;">{{$article->article_title}}</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      {!!$article->article_content!!}
    </div>
  </div>
</div>
@endsection
