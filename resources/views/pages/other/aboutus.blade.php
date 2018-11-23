@extends('layouts.master')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <span>{!!$content->content!!}</span>
    </div>
  </div>
</div>
@endsection
