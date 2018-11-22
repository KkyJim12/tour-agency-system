@extends('layouts.master')

@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col-lg-9">
      @include('components.tour-slide')
      <h3 class="tour-main-title mt-3">{{$tour->tour_name}}</h3>
      <div class="row">
        <div class="col-lg-6">
          <hr>
          <h5 class="tour-main-title">ราคาเริ่มต้น {{$tour->tour_price}} บาท/ท่าน</h5>
        </div>
        <div class="col-lg-6">
          <hr>
          <h5 class="tour-main-title">ติดต่อสอบถามโปรแกรมทัวร์</h5>
          <div class="row">
            <div class="col-4">
              <a href="mailto:{{$tour->tour_staff_email}}"><img src="/assets/img/components/contact-1.png" alt="contact_img"></a>
            </div>
            <div class="col-4">
              <a href="http://line.me/ti/p/{{$tour->tour_staff_line}}"><img src="/assets/img/components/contact-2.png" alt="contact_img"></a>
            </div>
            <div class="col-4">
              <a href="tel:+66 {{$tour->tour_staff_phone}}"><img src="/assets/img/components/contact-3.png" alt="contact_img"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5 tour-info">
        <div class="col-lg-6">
          <p>ประเทศ: {{$tour->tour_country_name}}</p>
          <p>สายการบิน: {{$tour->tour_airline_name}}</p>
        </div>
        <div class="col-lg-6">
          <p>ระยะเวลา: {{$tour->tour_day}} วัน {{$tour->tour_night}} คืน</p>
          <p>ช่วงเวลา: {{$tour->tour_start_date}}</p>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-9">
          <p>{!!$tour->tour_hightlight!!}</p>
        </div>
        <div class="col-lg-3 tour-pdf">
          <p>ดาวน์โหลดไฟล์โปรแกรม</p>
          <a href="/assets/img/upload/tour/pdf/{{$tour->tour_pdf}}" download><img src="/assets/img/components/pdf.png" alt="pdf"> </a>
        </div>
      </div>
      <hr>
      <div class="row mt-5">
        <h5 class="col-lg-12">กำหนดการเดินทาง/อัตราค่าบริการ</h5>
      </div>
      <hr>
      <div class="row mt-5">
        <nav class="col-lg-12">
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">รายละเอียดโปรแกรม</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">เงื่อไขการเดินทาง</a>
          </div>
        </nav>
        <div class="tab-content col-lg-12 mt-3" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><embed src="/assets/img/upload/tour/pdf/{{$tour->tour_pdf}}" width="100%" height="600"> </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">{!!$tour->tour_condition!!}</div>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <hr>
      <h5>คิดจะเที่ยวคิดถึงรอยัลทัวร์</h5><br>
      @foreach($continent as $all_continent)
        <div class="row">
          <div class="col-12">
            {{$all_continent->continent_name}}
          </div>
          <hr>
            @foreach($all_continent->subcat as $subcat)
              <div class="col-6">
                <a href="/category/{{$subcat->_id}}">
                  <img class="tour-cat-img" src="/assets/img/upload/country/{{$subcat->country_img}}" alt="country_img">  {{$subcat->country_name}}
                </a>
              </div>
            @endforeach
        </div>
        <hr>
      @endforeach
    </div>
  </div>
</div>
@endsection
