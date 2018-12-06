@extends('layouts.master')


@section('title')
Royaltour | เที่ยว {{$country->country_name}}
@endsection

@section('meta')
เที่ยว {{$country->country_name}} กับ Royaltour โปรโมชั่นพิเศษมากมาย ราคาถูก ที่เดียวครบ !!
@endsection

@section('content')
<div class="jumbotron jumbotron-fluid category-title">
  <div class="container">
    <h1 class="display-4">ทัวร์ต่างประเทศ</h1>
    <p>หน้าแรก > ทัวร์ต่างประเทศ</p>
  </div>
</div>

<!-- Filter -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <strong><h3>{{$country->country_name}} ({{$tour->count()}})</h3> </strong>
      <h5>{{$country->country_name}}:ทั้งหมด {{$tour->count()}} โปรแกรม</h5>
    </div>
  </div>
  <hr>
  @include('components.filter')
<!-- End Filter -->

<!-- item -->
<div class="row">

  @foreach($tour as $show_tour)
  <div class="col-lg-4 mb-5">
      <div class="card tour-box">
        <a href="/tour/{{$show_tour->_id}}">
          <img class="card-img-top tour-main-img" src="/assets/img/upload/tour/img/{{$show_tour->tour_img}}" alt="tour_suggest">
        </a>
        <div class="card-body">
          <a class="card-body-link" href="/tour/{{$show_tour->_id}}">
            <h5 class="card-title tour-card-title"><strong>{{str_limit($show_tour->tour_name,55)}}</strong></h5>
          </a>
          <small><i>{{$show_tour->tour_country_name}} -  {{$show_tour->tour_day}} วัน {{$show_tour->tour_night}} คืน</i></small>
          <div class="tour-detail-box mt-2">
            <p class="card-text">{!!$show_tour->tour_hightlight!!}</p>
          </div>
          <div class="tour-date-box mt-2">
            <span>ช่วงเวลา: {{$show_tour->tour_start_date}}</span>
          </div>
          <div class="row mt-3">
            <span class="col-9">เริ่ม {{$show_tour->tour_price}} บาท</span>
            <img class="col-3 tour-airline-img" src="/assets/img/upload/airline/{{$show_tour->tour_airline_img}}" alt="airline_suggest">
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a class="btn btn-primary" href="/tour/{{$show_tour->_id}}">
              <i class="fas fa-file-alt"></i>  รายละเอียด
              </a>
            </div>
            <div class="col-6 tour-file">
              <a class="btn btn-success" href="/assets/img/upload/tour/pdf/{{$show_tour->tour_pdf}}" download>
              <i class="fas fa-file-pdf"></i>  ไฟล์โปรแกรม
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
</div>
</div>
<!-- End Item -->
@endsection
