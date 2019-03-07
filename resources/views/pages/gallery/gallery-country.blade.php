@extends('layouts.master')
@section('title')
Royaltour | ภาพประทับใจ {{$this_country->country_name}}
@endsection
@section('meta')
Royaltour | ภาพประทับใจ {{$this_country->country_name}}
@endsection
@section('content')
<div class="galleryContent">
  <div class="banner">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
          <div class="titleBanner">
            <h1>Royal Tour And Travel</h1>
            <p>- ภาพประทับใจ -</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-4">
    <div class="row">
      <div class="col-12">
        <h3 class="title"><img src='/assets/img/home/icn-camera.png' class='icon-title'>ภาพความประทับใจ <span class='country'>{{$this_country->country_name}}</span></h3>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      @foreach($gallery as $show_gallery)
      <div class="col-sm-6 col-md-4 col-lg-3 galleryTemp">
         <a data-toggle="modal" data-target="#modal{{$show_gallery->_id}}">
            <section>
              <figure>
                <img src="/assets/img/upload/gallery/img/{{$show_gallery->gallery_img}}" alt="gallery_img">
              </figure>
               <div  class="card-body-link">
                  <p>{{$show_gallery->gallery_name}}</p>
               </div>
            </section>
         </a>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal{{$show_gallery->_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">{{$show_gallery->gallery_name}}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div id="thumbnail{{$show_gallery->_id}}" class="carousel thumbnail_image_carousel_fade thumbnail_image_carousel_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
                     <!-- Indicators -->
                     <ol class="carousel-indicators thumbnail_image_carousel_indicators">
                        <li data-target="#thumbnail{{$show_gallery->_id}}" data-slide-to="0" class="active">
                           <img src="/assets/img/upload/gallery/img/{{$show_gallery->gallery_img}}" alt="slider" />
                        </li>
                        @foreach($show_gallery->gallery_other_img as $gallery_other_img)
                        <li data-target="#thumbnail{{$show_gallery->_id}}" data-slide-to="{{$loop->iteration}}">
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
</div>
@endsection
