@extends('layouts.master')
@section('title')
Royaltour | วิธีการชำระเงิน
@endsection
@section('meta')
Royaltour | วิธีการชำระเงิน
@endsection
@section('content')
<div class="jumbotron jumbotron-fluid" style="background:url('/assets/img/components/image_bg_10.jpg'); text-align:center; color:white;">
   <div class="container">
      <h1>วิธีการชำระเงิน</h1>
      <p>หน้าแรก > วิธีการชำระเงิน</p>
   </div>
</div>
<div class="container">
   <div class="row">
      <div class="col-md-12">
         <span>{!!$content->content!!}</span>
      </div>
   </div>
</div>

@endsection
