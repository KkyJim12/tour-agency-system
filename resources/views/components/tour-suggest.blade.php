<div>
  <div class="container mt-5">
     <div class="row">
        <div class="col-lg-12">
           <h3 class="title"><img src='/assets/img/home/icn-recommend.png' class='icon-title'>โปรแกรมทัวร์ยอดนิยม</h3>
        </div>
     </div>
     <div class='row recommend'>
       @foreach($tour_suggest as $show_tour_suggest)
       <div class='col-6 col-md-4 col-lg-3 mb-4'>
         <div>
           <figure>
             <a href='/tour/{{ isset($show_tour_suggest->tour_seo_url) && $show_tour_suggest->tour_seo_url != "" ? $show_tour_suggest->tour_seo_url : $show_tour_suggest->_id }}'>
               <img src='/assets/img/upload/tour/img/{{$show_tour_suggest->tour_img}}'>
             </a>
           </figure>
           <a href='/tour/{{ isset($show_tour_suggest->tour_seo_url) && $show_tour_suggest->tour_seo_url != "" ? $show_tour_suggest->tour_seo_url : $show_tour_suggest->_id }}'>
             <h1>{{str_limit($show_tour_suggest->tour_name,50)}}</h1>
             <h2>
               @if($show_tour_suggest->tour_month == $show_tour_suggest->tour_month_last)
                 {{$show_tour_suggest->tour_month}}
               @else
                 {{$show_tour_suggest->tour_month}} - {{$show_tour_suggest->tour_month_last}}
               @endif
             </h2>
             <p>ราคา {{number_format($show_tour_suggest->tour_price_show)}} บาท</p>
           </a>
         </div>
       </div>
       @endforeach
     </div>
  </div>
</div>
