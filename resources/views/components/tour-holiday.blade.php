<div class="container homeHoliday paddingContent">
   <div class="row">
      <div class="col-lg-12">
         <h3 class="title"><img src='/assets/img/home/icn-camera.png' class='icon-title'>โปรแกรมเน้นวันหยุด</h3>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-12">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item">
              <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">ทั้งหมด</a>
          </li>
          @foreach($holiday as $all_holiday)
          <li class="nav-item">
              <a class="nav-link" id="pills-one-tab" data-toggle="pill" href="#pill{{$loop->iteration}}" role="tab" aria-controls="pills-one" aria-selected="false">{{$all_holiday->holiday_name}}</a>
          </li>
          @endforeach
        </ul>
        <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
          @foreach($all_tour_holiday as $show_all_tour_holiday)
          <div class="row recommend">
            <div class="col-6 col-md-4 col-lg-3">
              <figure>
                <a href='/tour/{{$show_all_tour_holiday->_id}}'>
                  <img src='/assets/img/upload/tour/img/{{$show_all_tour_holiday->tour_img}}'>
                </a>
              </figure>
              <a href='/tour/{{$show_all_tour_holiday->_id}}'>
                <h1>{{$show_all_tour_holiday->tour_name}}</h1>
                <h2>วันที่ {{date('d/m/Y',strtotime($show_all_tour_holiday->tour_start_date[0]))}} ถึง {{date('d/m/Y',strtotime($show_all_tour_holiday->tour_end_date[0]))}}</h2>
                <p>ราคา {{number_format($show_all_tour_holiday->tour_price)}} บาท</p>
              </a>
            </div>
          </div>
          @endforeach
        </div>
        @foreach($holiday as $all_holiday)
        <div class="tab-pane fade" id="pill{{$loop->iteration}}" role="tabpanel" aria-labelledby="pills-one-tab">
          @foreach($all_holiday->subholiday as $subholiday)
          <div class="row recommend">
            <div class="col-6 col-md-4 col-lg-3">
              <figure>
                <a href='/tour/{{$show_all_tour_holiday->_id}}'>
                  <img src='/assets/img/upload/tour/img/{{$show_all_tour_holiday->tour_img}}'>
                </a>
              </figure>
              <a href='/tour/{{$show_all_tour_holiday->_id}}'>
                <h1>{{$show_all_tour_holiday->tour_name}}</h1>
                <h2>วันที่ {{date('d/m/Y',strtotime($show_all_tour_holiday->tour_start_date[0]))}} ถึง {{date('d/m/Y',strtotime($show_all_tour_holiday->tour_end_date[0]))}}</h2>
                <p>ราคา {{number_format($show_all_tour_holiday->tour_price)}} บาท</p>
              </a>
            </div>
          </div>
          @endforeach
        </div>
        @endforeach
        </div>
      </div>
   </div>
</div>
