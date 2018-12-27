<div class='bgGray'>
  <div class="container paddingContent">
    <div class="row">
      <div class="col-12">
        <h3 class="title"><img src='/assets/img/home/icn-camera.png' class='icon-title'>ภาพประทับใจออนทัวร์</h3>
      </div>
    </div>
    <div class="row homeMoment">
      <div class='col-lg-4'>
        <div class="row leftSide">
          @if($main_gallery)
          @foreach($main_gallery as $show_main_gallery)
          <div class="col-md-4 col-lg-12">
            <figure>
              <img src='/assets/img/upload/gallery/img/{{$show_main_gallery->gallery_img}}'>
            </figure>
          </div>
          @endforeach
          @endif
        </div>
      </div>
      <div class='col-lg-8'>
        <ul id="imageGallery">
          @if($gallery)
          @foreach($gallery->gallery_other_img as $show_gallery)
          <li data-thumb="/assets/img/upload/gallery/otherimg/{{$show_gallery}}" data-src="/assets/img/upload/gallery/otherimg/{{$show_gallery}}">
            <figure>
              <img src='/assets/img/upload/gallery/otherimg/{{$show_gallery}}'>
            </figure>
          </li>
          @endforeach
          @endif
        </ul>
      </div>
    </div>
  </div>
</div>
