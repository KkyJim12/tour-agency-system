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
            <a href="/tour/{{$show_all_tour_holiday->_id}}"><img src="/assets/img/upload/tour/img/{{$show_all_tour_holiday->tour_img}}" alt="holiday_tour"></a>
          @endforeach
        </div>
        @foreach($holiday as $all_holiday)
        <div class="tab-pane fade" id="pill{{$loop->iteration}}" role="tabpanel" aria-labelledby="pills-one-tab">
          @foreach($all_holiday->subholiday as $subholiday)
            <a href="/tour/{{$subholiday->_id}}"><img src="/assets/img/upload/tour/img/{{$subholiday->tour_img}}" alt="holiday-tour"></a>
          @endforeach
        </div>
        @endforeach
        </div>
      </div>
   </div>
</div>
