@extends('layouts.master')


@section('title')
Royaltour | ติดต่อเรา
@endsection

@section('meta')
Royaltour | ติดต่อเรา
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <span>{!!$content->content!!}</span>
    </div>
  </div>
</div>
@endsection
