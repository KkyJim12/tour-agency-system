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
