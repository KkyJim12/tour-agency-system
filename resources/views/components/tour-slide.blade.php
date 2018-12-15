<div id="thumbnail_image_carousel" class="carousel thumbnail_image_carousel_fade thumbnail_image_carousel_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
   <!-- Indicators -->
   <ol class="carousel-indicators thumbnail_image_carousel_indicators">
      <li data-target="#thumbnail_image_carousel" data-slide-to="0" class="active">
         <img src="/assets/img/upload/tour/img/{{$tour->tour_img}}" alt="slider" />
      </li>
      @foreach($tour->tour_other_img as $tour_other_img)
      <li data-target="#thumbnail_image_carousel" data-slide-to="{{$loop->iteration}}">
         <img src="/assets/img/upload/tour/otherimg/{{$tour_other_img}}" alt="slider" />
      </li>
      @endforeach
   </ol>
   <!-- Wrapper for slides -->
   <div class="carousel-inner" role="listbox">
      <!--========= First Slide =========-->
      <div class="item active">
         <img src="/assets/img/upload/tour/img/{{$tour->tour_img}}" alt="slider" />
      </div>
      <!--========= Second Slide =========-->
      @if($tour->tour_other_img)
      @foreach($tour->tour_other_img as $tour_other_img)
      <div class="item">
         <img src="/assets/img/upload/tour/otherimg/{{$tour_other_img}}" alt="slider" />
      </div>
      @endforeach
      @endif
   </div>
</div>
