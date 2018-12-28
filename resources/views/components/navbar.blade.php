<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light d-none d-md-none d-lg-block" style="border-top: 2px solid #6ABCDC;">
   <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse headerTop">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item">
               <h3 class="first-contact mb-0"><i class="fab fa-telegram"></i> <a href='tel:025950279'>02-595-0279</a> , <a href='tel:0838883894'>083-888-3894</a></h3>
            </li>
         </ul>
         <ul class="navbar-nav ml-auto ">
            <li class="nav-item">
               <a class="nav-link p-0" href="https://www.facebook.com/royaltourgroup/" target="_blank"><i class="fab fa-facebook-square"></i></a>
            </li>
            <li class="nav-item">
               <a class="nav-link p-0" href="http://line.me/ti/p/@royaltour" target="_blank"><i class="fab fa-line"></i></a>
            </li>
         </ul>
      </div>
   </div>
</nav>
<nav class="second-navbar navbar navbar-expand-lg navbar-light bg-light d-none d-md-none d-lg-block">
   <div class="container">
     <div class='col-4'>
       <a class="navbar-brand" href="/"><img src="/assets/img/logo/logo.png" alt="logo"> </a>
     </div>
     <div class='col-8'>
       <?php
          try {
              ?>
       <a href="{{$nav_banner->banner_link}}" class='bannerTop'>
         <img class="nav-banner-img" src="/assets/img/upload/banner/{{$nav_banner->banner_img}}" alt="">
       </a>
       <?php
          } catch (\Throwable $egg) {
          }
          ?>
     </div>
   </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container">
      <a class="navbar-brand mr-auto d-md-none d-lg-none d-md-block d-lg-none" href="/"><img src="/assets/img/logo/logo.png" alt="logo"> </a>
      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class='d-lg-none w-100 text-center mt-3'>
        <div class="form-group d-inline-block selectTemp">
          <select class="form-control d-inline-block" onchange="location = this.value;">
            <option>กรุณาเลือกประเทศ</option>
            @foreach($continent as $show_continent)
            <optgroup label="{{$show_continent->continent_name}}">
            @foreach($show_continent->subcat as $subcat)
            <option value="/category/{{$subcat->_id}}">{{$subcat->country_name}}</option>
            @endforeach
            </optgroup>
            @endforeach
          </select>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item mr-3">
               <a class="nav-link" href="/">หน้าหลัก</a>
            </li>
            <li class="nav-item mr-3 d-none d-lg-block">
               <div class="dropdown">
                  <a class="nav-link" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  ทัวร์ต่างประเทศ
                  </a>
                  <div class="dropdown-menu dropdown-nav" aria-labelledby="dropdownMenu2">
                     @foreach($continent as $all_continent)
                     <div class="row">
                        <div class="col-12">
                           <span class="dropdown-item cat-link">{{$all_continent->continent_name}}</span>
                        </div>
                        @foreach($all_continent->subcat as $subcat)
                        <div class="col-3">
                           <a class="cat-link" href="/category/{{$subcat->_id}}"><span class="dropdown-item cat-link"><img src="/assets/img/upload/country/{{$subcat->country_img}}" alt="country_img"> {{$subcat->country_name}}</span></a>
                        </div>
                        @endforeach
                     </div>
                     <hr>
                     @endforeach
                  </div>
               </div>
            </li>
            <li class="nav-item mr-3 d-lg-none">
              <div class="accordion" id="accordionExample">
                <a class="" data-toggle="collapse" data-target="#tourlist" aria-expanded="true" aria-controls="tourlist">
                  <i class="fas fa-plus-square"></i> ทัวร์ต่างประเทศ
                </a>
                <div id="tourlist" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <section>
                    @foreach($continent as $all_continent)
                    <h1>{{$all_continent->continent_name}}</h1>
                    @foreach($all_continent->subcat as $subcat)
                     <a href="/category/{{$subcat->_id}}">{{$subcat->country_name}}</a>
                    @endforeach
                    @endforeach
                  </section>
                </div>
              </div>
            </li>
            <li class="nav-item mr-3">
               <a class="nav-link" href="#">สินค้าและบริการอื่น</a>
            </li>
            <li class="nav-item mr-3">
               <a class="nav-link" href="/article">บทความ</a>
            </li>
            <li class="nav-item mr-3">
               <a class="nav-link" href="/how-to-pay">การชำระเงิน</a>
            </li>
            <li class="nav-item mr-3">
               <a class="nav-link" href="/aboutus">เกี่ยวกับเรา</a>
            </li>
            <li class="nav-item mr-3">
               <a class="nav-link" href="/gallery">ภาพประทับใจ</a>
            </li>
            <li class="nav-item mr-3">
               <a class="nav-link" href="/contactus">ติดต่อเรา</a>
            </li>
         </ul>
      </div>
   </div>
</nav>
<!-- End Navbar -->
