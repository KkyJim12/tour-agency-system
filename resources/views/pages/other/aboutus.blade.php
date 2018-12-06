@extends('layouts.master')

@section('title')
Royaltour | เกี่ยวกับเรา
@endsection

@section('meta')
Royaltour | เกี่ยวกับเรา
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
