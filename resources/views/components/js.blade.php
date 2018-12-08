<script type="text/javascript">
  $('.owl-carousel').owlCarousel({
  loop:true,
  margin:20,
  nav:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      },
  },
});
</script>
<script type="text/javascript">
  $("#filter_price").ionRangeSlider({
    min:0,
    max:100000,
    type:'double',
    step:1000,
  });
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.2&appId=548224705534255&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
