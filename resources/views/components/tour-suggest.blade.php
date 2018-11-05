<div class="container mt-5">
  <div class="row">
    <div class="col-lg-12">
      <h3 class="tour-suggest-title">โปรแกรมทัวร์ยอดนิยม</h3>
      <p class="tour-suggest-title">โปรแกรมทัวร์ขายดี</p>
    </div>
  </div>
  <div class="row">
    @foreach($tour_suggest as $show_tour_suggest)
    <div class="col-lg-4">
      <div class="card tour-box">
        <img class="card-img-top" src="/assets/img/upload/tour/img/{{$show_tour_suggest->tour_img}}" alt="tour_suggest">
        <div class="card-body">
          <h5 class="card-title"><strong>{{$show_tour_suggest->tour_name}}</strong></h5>
          <small><i>{{$show_tour_suggest->tour_country_name}} -  {{$show_tour_suggest->tour_day}} วัน {{$show_tour_suggest->tour_night}} คืน</i></small>
          <div class="tour-detail-box mt-2">
            <p class="card-text">{{$show_tour_suggest->tour_hightlight}}</p>
          </div>
          <div class="tour-date-box mt-2">
            <p>ช่วงเวลา: {{$show_tour_suggest->tour_start_date}}</p>
          </div>
          <div class="row mt-3">
            <span class="col-6">เริ่ม {{$show_tour_suggest->tour_price}} บาท</span>
            <img class="col-6 tour-airline-img" src="/assets/img/upload/airline/{{$show_tour_suggest->tour_airline_img}}" alt="airline_suggest">
          </div>
          <div class="row mt-3">
            <a class="col-lg-6" href="/tour/{{$show_tour_suggest->_id}}">
              <img src="/assets/img/components/btn-detail.png" alt="tour-detail">
            </a>
            <a class="col-lg-6" href="/assets/img/upload/tour/pdf/{{$show_tour_suggest->tour_pdf}}" download>
              <img src="/assets/img/components/btn-file.png" alt="tour-file">
            </a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
