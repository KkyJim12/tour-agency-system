@extends('layouts.master')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-9">
      <img class="tour-main-img" src="/assets/img/upload/tour/img/{{$tour->tour_img}}" alt="tour_img">
      <h3 class="tour-main-title">{{$tour->tour_name}}</h3>
      <div class="row">
        <div class="col-lg-6">
          <hr>
          <h5 class="tour-main-title">ราคาเริ่มต้น {{$tour->tour_price}} บาท/ท่าน</h5>
        </div>
        <div class="col-lg-6">
          <hr>
          <h5 class="tour-main-title">ติดต่อสอบถามโปรแกรมทัวร์</h5>
          <div class="row">
            <div class="col-lg-4">
              <img src="/assets/img/components/contact-1.png" alt="contact_img">
            </div>
            <div class="col-lg-4">
              <img src="/assets/img/components/contact-2.png" alt="contact_img">
            </div>
            <div class="col-lg-4">
              <img src="/assets/img/components/contact-3.png" alt="contact_img">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <p>ประเทศ: {{$tour->tour_country_name}}</p>
          <p>สายการบิน: {{$tour->tour_airline_name}}</p>
        </div>
        <div class="col-lg-6">
          <p>ระยะเวลา: {{$tour->tour_day}} วัน {{$tour->tour_night}} คืน</p>
          <p>ช่วงเวลา: {{$tour->tour_start_date}}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-9">
          <p>{{$tour->tour_highlight}}</p>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <hr>
      <h5>คิดจะเที่ยวคิดถึงรอยัลทัวร์</h5><br>
      @foreach($country as $all_country)
      <div class="col-lg-6">
        <div class="row">
          <div class="col-lg-6">
            <img class="country-small-img" src="/assets/img/upload/country/{{$all_country->country_img}}" alt="country_img">
          </div>
          <div class="col-lg-6">
            {{$all_country->country_name}}
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
