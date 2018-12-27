@extends('layouts.master')
@section('content')
<div class="filterResult">
  <div class="banner">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
          <div class="titleBanner">
            <h1>Royal Tour And Travel</h1>
            <p>ผลการค้นหา</p>
            <h6>ผลการค้นหา <span>{{count($tours)}}</span> โปรแกรม</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        @include('components.filter')
      </div>
    </div>
    <div class="row tempCategory">
       @foreach($tours as $show_tour)
       <div class="col-sm-6 col-lg-4 col-xl-3 mb-3">
         <div class="card">
            <a href="/tour/{{$show_tour->_id}}">
              <img src="/assets/img/upload/tour/img/{{$show_tour->tour_img}}">
              <p class='text-right'>ลดเหลือ</br><span>{{$show_tour->tour_price}}฿</span></p>
            </a>
            <div class="card-body">
               <a class="card-body-link" href="#">
                  <h5 class="card-title">{{str_limit($show_tour->tour_name,55)}}</h5>
                  <h6>{{$show_tour->tour_country_name}} -  {{$show_tour->tour_day}} วัน {{$show_tour->tour_night}} คืน</h6>
                  {!!$show_tour->tour_hightlight!!}
                  <h2>สายการบิน<span><img src="/assets/img/upload/airline/{{$show_tour->tour_airline_img}}" alt="airline_suggest"> AirAsia</span></h2>
                  <h4>ราคาเริ่มต้น<span>3000฿</span></h4>
                  <h3>ลดเหลือ<span>{{$show_tour->tour_price}}฿</span></h3>
                  <section class='text-center'><i class="far fa-clock"></i><span>{{$show_tour->tour_start_date[0]}}</span><span class='tourTime'>12:00 PM</span></section>
               </a>
               <div class='row discountFooter'>
                 <div class="col-6">
                    <a class="btn btnDetail" href="/tour/{{$show_tour->_id}}">
                    <i class="fas fa-file-alt"></i>  รายละเอียด
                    </a>
                 </div>
                 <div class="col-6 tour-file">
                    <a class="btn btnFile" href="/assets/img/upload/tour/pdf/{{$show_tour->tour_pdf}}" download>
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
</div>
<!-- End Item -->
@endsection
