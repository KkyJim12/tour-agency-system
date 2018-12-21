@extends('layouts.master')
@section('title')
@if($tour->tour_seo_title)
{{$tour->tour_seo_title}}
@else
{{$tour->tour_name}}
@endif
@endsection
@section('meta')
@if($tour->tour_seo_meta)
{{$tour->tour_seo_meta}}
@else
{{$tour->tour_hightlight}}
@endif
@endsection
@section('content')
<div class="jumbotron jumbotron-fluid" style="background:url('/assets/img/components/image_bg_11.jpg'); text-align:center; color:white;">
   <div class="container">
      <h1>ทัวร์ต่างประเทศ</h1>
      <p>หน้าแรก > ทัวร์ต่างประเทศ > {{$tour->tour_country_name}} > {{$tour->tour_name}}</p>
   </div>
</div>
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
         <div class="mt-5 tour-info">
            <div class="row">
               <div class="col-lg-6">
                  <p>ประเทศ: {{$tour->tour_country_name}}</p>
                  <p>สายการบิน: {{$tour->tour_airline_name}}</p>
               </div>
               <div class="col-lg-6">
                  <p>ระยะเวลา: {{$tour->tour_day}} วัน {{$tour->tour_night}} คืน</p>
                  <p>ช่วงเวลา: {{$tour->tour_start_date[0]}}</p>
               </div>
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
            <div class="col-md-12">
              <h5 class="col-lg-12">กำหนดการเดินทาง/อัตราค่าบริการ</h5>
            </div>
            @if(session('success'))
              <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                {{session('success')}}
                </div>
              </div>
            @endif
            @if ($errors->any())
             <div class="col-md-12">
               <div class="alert alert-danger">
                   <ul>
                       @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                       @endforeach
                   </ul>
               </div>
             </div>
            @endif
            <div class="col-md-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">วันไป</th>
                    <th scope="col">วันกลับ</th>
                    <th scope="col">ราคา</th>
                    <th scope="col">จอง</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach(array_combine($tour->tour_start_date,$tour->tour_end_date) as $tour_start_date=>$tour_end_date)
                  <tr>
                    <td>{{$tour_start_date}}</td>
                    <td>{{$tour_end_date}}</td>
                    <td>{{$tour->tour_price}}</td>
                    <td>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        จอง
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">{{str_limit($tour->tour_name,35)}} </br> {{$tour_start_date}} - {{$tour_end_date}} ราคา {{$tour->tour_price}} บาท/คน</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="/reserve-tour-process" method="post">
                                <div class="form-group">
                                  <label>ชื่อผู้จอง</label>
                                  <input class="form-control" type="text" name="reserve_name" value="" placeholder="กรุณากรอกชื่อ">
                                </div>
                                <div class="form-group">
                                  <label>จำนวนผู้เดินทาง</label>
                                  <input class="form-control" type="number" name="reserve_qty" value="" placeholder="กรุณากรอกจำนวน">
                                </div>
                                <div class="form-group">
                                  <label>เบอร์โทร</label>
                                  <input class="form-control" type="number" name="reserve_tel" value="" placeholder="กรุณากรอกเบอร์โทร">
                                </div>
                                <div class="form-group">
                                  <label>รายละเอียดอื่นๆ</label>
                                  <textarea class="form-control" name="reserve_info" rows="6" cols="80" placeholder="รายละเอียดเพิ่มเติม"></textarea>
                                </div>
                                <input type="hidden" name="reserve_tour_id" value="{{$tour->_id}}">
                                <input type="hidden" name="reserve_tour_start_date" value="{{$tour_start_date}}">
                                <input type="hidden" name="reserve_tour_end_date" value="{{$tour_end_date}}">
                                @csrf
                                <button class="btn btn-success form-control" type="submit" name="button">ลงชื่อจอง</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
         </div>
         <hr>
         <div class="row mt-5">
            <nav class="col-lg-12">
               <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link tour-tab active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">รายละเอียดโปรแกรม</a>
                  <a class="nav-item nav-link tour-tab" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">เงื่อนไขการเดินทาง</a>
               </div>
            </nav>
            <div class="tab-content col-lg-12 mt-3" id="nav-tabContent">
               <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <embed src="/assets/img/upload/tour/pdf/{{$tour->tour_pdf}}" width="100%" height="600" scrolling="yes">
               </div>
               <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">{!!$tour->tour_condition!!}</div>
            </div>
         </div>
      </div>
      <div class="col-lg-3">
         <div class="fb-share-button" data-layout="box_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">แชร์</a></div>
         <hr>
         <h5>คิดจะเที่ยวคิดถึงรอยัลทัวร์</h5>
         <br>
         @foreach($continent as $all_continent)
         <div class="row">
            <div class="col-12">
               {{$all_continent->continent_name}}
            </div>
            <hr>
            @foreach($all_continent->subcat as $subcat)
            <div class="col-6">
               <a class="country-link" href="/category/{{$subcat->_id}}">
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
