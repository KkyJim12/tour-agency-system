<?php
try {
    ?>
<div class="container">
  <div class="row">
    <div class="col-lg-8 mt-3 banner-fb">
      <a href="{{$sixth_banner->banner_link}}">
        <img class="big-banner-img" src="/assets/img/upload/banner/{{$sixth_banner->banner_img}}" alt="banner-ads">
      </a>
    </div>
    <div class="col-lg-4 mt-3">
      <div class="fb-page"
  data-tabs="timeline,events,messages"
  data-href="https://www.facebook.com/royaltourgroup"
  data-width="380"
  data-hide-cover="false"></div>
    </div>
  </div>
</div>


<?php
} catch (\Throwable $egg) {
    }
?>
