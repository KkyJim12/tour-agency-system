<nav class="navbar navbar-expand-lg navbar-light bg-light d-none d-sm-block d-md-none d-lg-block">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <span class="first-contact"><i class="fas fa-mobile"></i>  <i>Hotline</i> : 02-595-0279 , 083-888-3894</span>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fab fa-facebook icon-social"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fab fa-line icon-social"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<nav class="second-navbar navbar navbar-expand-lg navbar-light bg-light d-none d-sm-block d-md-none d-lg-block">
  <div class="container">
    <a class="navbar-brand" href="/"><img src="/assets/img/logo/logo.png" alt="logo"> </a>
    <div>

        <?php
        try {
            ?>

      <a href="{{$nav_banner->banner_link}}">
        <img class="nav-banner-img" class="nav-banner-img" src="/assets/img/upload/banner/{{$nav_banner->banner_img}}" alt="">
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

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item mr-3">
          <a class="nav-link" href="/">หน้าหลัก</a>
        </li>
        <li class="nav-item mr-3">
        <div class="dropdown">
          <a class="nav-link" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ทัวร์ต่างประเทศ
          </a>
          <div class="dropdown-menu dropdown-nav" aria-labelledby="dropdownMenu2">
            @foreach($continent as $all_continent)
            <div class="row">
              <div class="col-12">
                <span class="dropdown-item">{{$all_continent->continent_name}}</span>
              </div>
              @foreach($all_continent->subcat as $subcat)
                <div class="col-3">
                  <a class="cat-link" href="/category/{{$subcat->_id}}"><span class="dropdown-item"><img src="/assets/img/upload/country/{{$subcat->country_img}}" alt="country_img"> {{$subcat->country_name}}</span></a>
                </div>
              @endforeach
            </div>
            <hr>
            @endforeach
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
