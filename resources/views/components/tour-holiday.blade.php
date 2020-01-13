<div class="container homeHoliday paddingContent">
  <div class="row">
    <div class="col-lg-12">
      <h3 class="title"><img src='/assets/img/home/icn-camera.png' class='icon-title'>โปรแกรมเน้นวันหยุด</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        @foreach($holiday as $all_holiday)
        <li class="nav-item">
          <a class="nav-link" id="pills-one-tab" data-toggle="pill" href="#pill{{$loop->iteration}}" role="tab" aria-controls="pills-one" aria-selected="false">{{$all_holiday->holiday_name}}</a>
        </li>
        @endforeach
      </ul>
      <div class="tab-content" id="pills-tabContent">
        @foreach($holiday as $all_holiday)
        <div class="tab-pane fade" id="pill{{$loop->iteration}}" role="tabpanel" aria-labelledby="pills-one-tab">
          <div class="row recommend">
            <div class="col-6 col-md-4 col-lg-3">
              <figure>
                <img src="/assets/img/upload/holiday/{{$all_holiday->holiday_img}}" alt="holiday_img">
              </figure>
              <h1 style="text-align:center;">{{$all_holiday->holiday_name}}</h1>
            </div>
            @foreach($all_holiday->subholiday as $subholiday)
            <div class="col-6 col-md-4 col-lg-3">
              <figure>
                <a href='/tour/{{ isset($subholiday->tour_seo_url) && $subholiday->tour_seo_url != "" ? $subholiday->tour_seo_url : $subholiday->_id }}'>
                  <img src='/assets/img/upload/tour/img/{{$subholiday->tour_img}}'>
                </a>
              </figure>
              <a href='/tour/{{ isset($show_all_tour_holiday->tour_seo_url) && $show_all_tour_holiday->tour_seo_url != "" ? $show_all_tour_holiday->tour_seo_url : $show_all_tour_holiday->_id }}'>
                <h1>{{str_limit($subholiday->tour_name,50)}}</h1>
                <p>ราคา {{number_format($subholiday->tour_price_show)}} บาท</p>
              </a>
            </div>
            @endforeach
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>