@extends('layouts.master')

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
  <div class="filter mb-4 col-md-12">
    <h3>ค้นหาโปรแกรมทัวร์</h3>
    <form class="row" action="/filter-result" method="post">
      <div class="form-group col-md-3">
        <label>สถานที่จะไป</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-city"></i></span>
          </div>
          <input class="form-control" type="text" name="filter_name" value="" placeholder="ชื่อประเทศ/เมือง">
        </div>
      </div>
      <div class="form-group col-md-3">
        <label>วันเดินทาง</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-city"></i></span>
          </div>
          <input class="form-control" type="date" name="filter_start_date" value="" placeholder="วันไป">
        </div>
      </div>
      <div class="form-group col-md-3">
        <label>วันกลับ</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-city"></i></span>
          </div>
          <input class="form-control" type="date" name="filter_end_date" value="" placeholder="วันกลับ">
        </div>
      </div>
      <div class="form-group col-md-3">
        <label>สายการบิน</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-city"></i></span>
          </div>
          <select class="form-control" name="filter_airline">
            @foreach($airline as $all_airline)
            <option value="{{$all_airline->_id}}">{{$all_airline->airline_name}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group col-md-6">
        <label>ช่วงราคา</label>
        <input type="text" id="filter_price" name="filter_price" value="" />
      </div>
      <div class="col-md-3 mt-2">
        <label>รหัสทัวร์</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-city"></i></span>
          </div>
        <input class="form-control" type="text" name="filter_code" value="" placeholder="รหัสทัวร์">
      </div>
      </div>
      @csrf
      <div class="form-group col-md-3">
        <label></label>
        <button class="btn btn-success form-control" type="submit" name="button">ค้นหา</button>
      </div>
    </form>
  </div>
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
          <a href="/tour/{{$show_tour->_id}}">
            <h5 class="card-title"><strong>{{$show_tour->tour_name}}</strong></h5>
          </a>
          <small><i>{{$show_tour->tour_country_name}} -  {{$show_tour->tour_day}} วัน {{$show_tour->tour_night}} คืน</i></small>
          <div class="tour-detail-box mt-2">
            <p class="card-text">{{$show_tour->tour_hightlight}}</p>
          </div>
          <div class="tour-date-box mt-2">
            <p>ช่วงเวลา: {{$show_tour->tour_start_date}}</p>
          </div>
          <div class="row mt-3">
            <span class="col-6">เริ่ม {{$show_tour->tour_price}} บาท</span>
            <img class="col-6 tour-airline-img" src="/assets/img/upload/airline/{{$show_tour->tour_airline_img}}" alt="airline_suggest">
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
