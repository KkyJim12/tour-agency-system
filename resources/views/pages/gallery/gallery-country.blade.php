@extends('layouts.master')

@section('title')
Royaltour | ภาพประทับใจ {{$this_country->country_name}}
@endsection

@section('meta')
Royaltour | ภาพประทับใจ {{$this_country->country_name}}
@endsection

@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
      <h3>ภาพประทับใจ {{$this_country->country_name}}</h3>
    </div>
  </div>
  <hr>
  <div class="row">
    @foreach($gallery as $show_gallery)
    <div class="col-md-4">
      <a data-toggle="modal" data-target="#exampleModalCenter">
        <div class="card" style="width:100%; text-align:center;">
          <img class="card-img-top gallery-content-img" src="/assets/img/upload/gallery/img/{{$show_gallery->gallery_img}}" alt="gallery_img">
          <div class="card-body">
            <p class="card-text">{{$show_gallery->gallery_name}}</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">{{$show_gallery->gallery_name}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div id="thumbnail_image_carousel" class="carousel thumbnail_image_carousel_fade thumbnail_image_carousel_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">

            			<!-- Indicators -->
            			<ol class="carousel-indicators thumbnail_image_carousel_indicators">

            				<li data-target="#thumbnail_image_carousel" data-slide-to="0" class="active">
            					<img src="/assets/img/upload/gallery/img/{{$show_gallery->gallery_img}}" alt="slider" />
            				</li>

                    @foreach($show_gallery->gallery_other_img as $gallery_other_img)
            				<li data-target="#thumbnail_image_carousel" data-slide-to="{{$loop->iteration}}">
            					<img src="/assets/img/upload/gallery/otherimg/{{$gallery_other_img}}" alt="slider" />
            				</li>
                    @endforeach
            			</ol>

            			<!-- Wrapper for slides -->
            			<div class="carousel-inner" role="listbox">

            				<!--========= First Slide =========-->
            				<div class="item active">
            					<img src="/assets/img/upload/gallery/img/{{$show_gallery->gallery_img}}" alt="slider" />
            				</div>

            				<!--========= Second Slide =========-->
                    @foreach($show_gallery->gallery_other_img as $gallery_other_img)
                    <div class="item">
            					<img src="/assets/img/upload/gallery/otherimg/{{$gallery_other_img}}" alt="slider" />
            				</div>
                    @endforeach
            			</div>

            		</div>
          </div>
        </div>
      </div>
    </div>

    @endforeach
  </div>
</div>

@endsection
