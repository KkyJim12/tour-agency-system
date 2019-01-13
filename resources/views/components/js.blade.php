<script type="text/javascript">
   $('.owlDiscount').owlCarousel({
   loop:true,
   margin:20,
   nav:false,
   responsive:{
       0:{
         items:1
       },
       576:{
           items:2
       },
       767:{
           items:2
       },
       991:{
           items:3
       },
       1200:{
           items:3
       },
   },
   });
</script>
<script type="text/javascript">
   $('.owlMoment').owlCarousel({
     loop:true,
      margin:10,
      nav:true,
      responsive:{
          0:{
              items:1
          },
      }
   });
</script>
<script type="text/javascript">
   $('.owlArticle').owlCarousel({
   loop:true,
   margin:20,
   nav:false,
   responsive:{
       0:{
         items:1
       }
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

<script type="text/javascript">
$(document).ready(function() {
  $('#imageGallery').lightSlider({
      gallery:true,
      item:1,
      loop:true,
      thumbItem:9,
      slideMargin:0,
      enableDrag: false,
      currentPagerPosition:'left',
      onSliderLoad: function(el) {
          el.lightGallery({
              selector: '#imageGallery .lslide'
          });
      }
  });
});
</script>


<div id="fb-root"></div>
<script>(function(d, s, id) {
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) return;
   js = d.createElement(s); js.id = id;
   js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.2&appId=548224705534255&autoLogAppEvents=1';
   fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<!-- <script type="text/javascript">
var viewport = $(window).width();
if (viewport <= 414) {
jQuery('.acc-menu').on("click", function() {
  jQuery('ul').toggleClass("display");
});
}
</script> -->
