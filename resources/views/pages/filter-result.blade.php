@extends('layouts.master')

@section('content')
<div class="jumbotron jumbotron-fluid category-title">
  <div class="container">
    <h1 class="display-4">ผลการค้นหา</h1>
    <p>หน้าแรก > ทัวร์ต่างประเทศ</p>
  </div>
</div>

<!-- Filter -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <strong><h3>ผลการค้นหา </h3> </strong>
      <h5>ผลการค้นหา:ทั้งหมด โปรแกรม</h5>
    </div>
  </div>
  <hr>
@include('components.filter')
<!-- End Filter -->

<!-- item -->
<div class="row">

  @foreach($tours as $show_tour)
  <div class="col-lg-4 mb-5">
      <div class="card tour-box">
        <a href="/tour/{{$show_tour->_id}}">
          <img class="card-img-top tour-main-img" src="/assets/img/upload/tour/img/{{$show_tour->tour_img}}" alt="tour_suggest">
        </a>
        <div class="card-body">
          <a href="/tour/{{$show_tour->_id}}">
            <h5 class="card-title"><strong>{{$show_tour->tour_name}}</strong></h5>
          </a>
          <small><i>{{$show_tour->tour_country_name}} -  {{$show_tour->tour_day}} วัน {{$show_tour->tour_night}} คืน</i></small>
          <div class="tour-detail-box mt-2">
            <p class="card-text">{!!$show_tour->tour_hightlight!!}</p>
          </div>
          <div class="tour-date-box mt-2">
            <p>ช่วงเวลา: {{$show_tour->tour_start_date}}</p>
          </div>
          <div class="row mt-3">
            <span class="col-6">เริ่ม {{$show_tour->tour_price}} บาท</span>
            <img class="col-6 tour-airline-img" src="/assets/img/upload/airline/{{$show_tour->tour_airline_img}}" alt="airline_suggest">
          </div>
          <div class="row mt-3">
            <div class="col-lg-6">
              <a class="btn btn-primary" href="/tour/{{$show_tour->_id}}">
              <i class="fas fa-file-alt"></i>  รายละเอียด
              </a>
            </div>
            <div class="col-lg-6 tour-file">
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
