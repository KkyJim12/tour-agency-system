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
      <div class="col-lg-4 col-md-6 col-xs-12 mb-3">
         <div class="card">
            <a href="/tour/{{ isset($show_tour->tour_seo_url) && $show_tour->tour_seo_url != "" ? $show_tour->tour_seo_url : $show_tour->_id }}">
              <img src="/assets/img/upload/tour/img/{{$show_tour->tour_img}}">
              <p class='text-right'>ราคา</br><span>{{number_format($show_tour->tour_price_show)}}฿</span></p>
            </a>
            <div class="card-body">
               <a class="card-body-link" href="#">
                  <h5 class="card-title">{{str_limit($show_tour->tour_name,27)}}</h5>
                  <h6>{{$show_tour->tour_country_name}} -  {{$show_tour->tour_day}} วัน {{$show_tour->tour_night}} คืน</h6>
                  <div style="overflow:auto; width:100%; height:100px; align:center;">
                    <p>{!!$show_tour->tour_hightlight!!}</p>
                  </div>
                  <h2>สายการบิน<span><img src="/assets/img/upload/airline/{{$show_tour->tour_airline_img}}" alt="airline_suggest"> {{$show_tour->tour_airline_name}}</span></h2>
                  @if($show_tour->tour_discount)
                  <h4>ราคาก่อนลด<span>{{number_format($show_tour->tour_discount)}}</span></h4>
                  @else
                  <br>
                  @endif
                  <h3>ราคา<span>{{number_format($show_tour->tour_price_show)}}฿</span></h3>
                  <section class='text-center'><i class="far fa-clock"></i><span>
                    @if($show_tour->tour_month == $show_tour->tour_month_last)
                      {{$show_tour->tour_month}}
                    @else
                      {{$show_tour->tour_month}} - {{$show_tour->tour_month_last}}
                    @endif
                  </section>
               </a>
               <div class='row discountFooter'>
                 <div class="col-6">
                    <a class="btn btnDetail" href="/tour/{{ isset($show_tour->tour_seo_url) && $show_tour->tour_seo_url != "" ? $show_tour->tour_seo_url : $show_tour->_id }}">
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
