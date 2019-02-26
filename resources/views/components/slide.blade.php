@if($first_slide !== null)
<div id="carouselExampleControls" class="carousel slide d-none d-sm-block" data-ride="carousel">
   <div class="carousel-inner main-slide">
      <a href="{{$first_slide->slide_link}}">
        <div class="carousel-item active">
          <img class="d-block slide-img" src="/assets/img/upload/slide/{{$first_slide->slide_img}}" alt="First slide">
        </div>
      </a>
      @foreach($slide as $show_slide)
      <a href="{{$show_slide->slide_link}}">
        <div class="carousel-item">
           <img class="d-block slide-img" src="/assets/img/upload/slide/{{$show_slide->slide_img}}" alt="other slide">
        </div>
      </a>
      @endforeach
   </div>
   <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
   </a>
</div>
@endif
