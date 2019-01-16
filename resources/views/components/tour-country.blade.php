<div class='homeCountry bgGray py-5'>
  <div class="container">
    <div class="row">
       <div class="col-lg-12">
          <h3 class="title"><img src='/assets/img/filter/worldwide.png' class='icon-title'>คิดจะเที่ยว คิดถึง รอยัลทัวร์</h3>
       </div>
    </div>
    <div class="row">
      <div class="countryTemp">
        @foreach($continent as $all_continent)
        <h1>{{$all_continent->continent_name}}</h1>
        <div class='row'>
          @foreach($all_continent->subcat as $subcat)
          <div class="col-6 col-sm-4 col-md-3 col-xl-2 mb-3">
            <a href="/category/{{$subcat->_id}}">
              <span>
                <img src='/assets/img/upload/country/{{$subcat->country_img}}'>
              </span>
              <span><p class='mb-0 d-inline-block'>{{$subcat->country_name}}</p></span>
            </a>
          </div>
          @endforeach
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
