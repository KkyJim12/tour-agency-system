@if($first_slide !== null)
<div id="carouselExampleControls" class="carousel slide d-none d-sm-block" data-ride="carousel">
  <div class="carousel-inner main-slide">
    <div class="carousel-item active">
      <img class="d-block w-100 slide-img" src="/assets/img/upload/slide/{{$first_slide->slide_img}}" alt="First slide">
    </div>
    @foreach($slide as $show_slide)
    <div class="carousel-item">
      <img class="d-block w-100 slide-img" src="/assets/img/upload/slide/{{$show_slide->slide_img}}" alt="First slide">
    </div>
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
