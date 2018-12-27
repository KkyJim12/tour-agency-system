<div class='discountTemp'>
  <div class="container">
    <div class="row">
       <div class="col-lg-12">
          <h3 class="title"><img src='/assets/img/home/icn-sale.png' class='icon-title'>โปรแกรมทัวร์ลดราคา</h3>
       </div>
    </div>
     <div class="owl-carousel owlDiscount tempCategory">
        @foreach($tour_discount as $show_tour_discount)
        <div class="item">
           <div class="card">
              <a href="/tour/{{$show_tour_discount->_id}}">
                <img src="/assets/img/upload/tour/img/{{$show_tour_discount->tour_img}}">
                <p class='text-right'>ลดเหลือ</br><span>{{$show_tour_discount->tour_price}}฿</span></p>
              </a>
              <div class="card-body">
                 <a class="card-body-link" href="#">
                    <h5 class="card-title">{{str_limit($show_tour_discount->tour_name,30)}}</h5>
                    <h6>{{$show_tour_discount->tour_country_name}} -  {{$show_tour_discount->tour_day}} วัน {{$show_tour_discount->tour_night}} คืน</h6>
                    <div style="overflow:auto; width:100%; height:50px; align:center;">
                      {!!$show_tour_discount->tour_hightlight!!}
                    </div>
                    <h2>สายการบิน<span><img src="/assets/img/upload/airline/{{$show_tour_discount->tour_airline_img}}" alt="airline_suggest"> AirAsia</span></h2>
                    <h4>ราคาเริ่มต้น<span>{{number_format($show_tour_discount->tour_discount)}}</span></h4>
                    <h3>ลดเหลือ<span>{{number_format($show_tour_discount->tour_price)}}฿</span></h3>
                    <section class='text-center'><i class="far fa-clock"></i><span>{{date('d/m/Y',strtotime($show_tour_discount->tour_start_date[0]))}} ถึง {{date('d/m/Y',strtotime($show_tour_discount->tour_end_date[0]))}}</section>
                 </a>
                 <div class='row discountFooter'>
                   <div class="col-6">
                      <a class="btn btnDetail" href="/tour/{{$show_tour_discount->_id}}">
                      <i class="fas fa-file-alt"></i>  รายละเอียด
                      </a>
                   </div>
                   <div class="col-6 tour-file">
                      <a class="btn btnFile" href="#" download>
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
