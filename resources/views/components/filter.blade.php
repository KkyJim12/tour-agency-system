<div class="filter mb-4 col-lg-12 d-none d-sm-none d-md-none d-lg-block">
   <h3><img src='/assets/img/filter/globe.png' class='icon-title'>ค้นหาโปรแกรมทัวร์</h3>
   <form class="row" action="/filter-result" method="get">
      <div class="form-group col-lg-3">
         <label>สถานที่จะไป</label>
         <div class="input-group">
            <div class="input-group-prepend">
               <span class="input-group-text" id="basic-addon1"><i class="fas fa-city"></i></span>
            </div>
            <input class="form-control" type="text" name="filter_name" value="" placeholder="ชื่อประเทศ/เมือง">
         </div>
      </div>
      <div class="form-group col-lg-3">
         <label>ประเทศ/เมือง</label>
         <div class="input-group">
           <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fas fa-globe-asia"></i></span>
           </div>
            <select class="form-control" name="filter_country">
               <option value="">เลือกประเทศ/เมือง</option>
               @foreach($filter_country as $all_country)
               <option value="{{$all_country->_id}}">{{$all_country->country_name}}</option>
               @endforeach
            </select>
         </div>
      </div>
      <div class="form-group col-lg-3">
         <label>วันเดินทาง</label>
         <div class="input-group">
            <div class="input-group-prepend">
               <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
            </div>
            <input class="form-control" type="date" name="filter_start_date" value="" placeholder="วันไป">
         </div>
      </div>
      <div class="form-group col-lg-3">
         <label>วันกลับ</label>
         <div class="input-group">
            <div class="input-group-prepend">
               <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
            </div>
            <input class="form-control" type="date" name="filter_end_date" value="" placeholder="วันกลับ">
         </div>
      </div>
      <div class="form-group col-lg-3">
         <label>สายการบิน</label>
         <div class="input-group">
            <div class="input-group-prepend">
               <span class="input-group-text" id="basic-addon1"><i class="fas fa-plane"></i></span>
            </div>
            <select class="form-control" name="filter_airline">
              <option value="">เลือกสายการบิน</option>
               @foreach($airline as $all_airline)
               <option value="{{$all_airline->_id}}">{{$all_airline->airline_name}}</option>
               @endforeach
            </select>
         </div>
      </div>
      <div class="col-lg-3">
         <label>รหัสทัวร์</label>
         <div class="input-group">
            <div class="input-group-prepend">
               <span class="input-group-text" id="basic-addon1"><i class="fas fa-list-ol"></i></span>
            </div>
            <input class="form-control" type="text" name="filter_code" value="" placeholder="รหัสทัวร์">
         </div>
      </div>
      <div class="form-group col-lg-6 mt-3 mt-lg-0">
         <label>ช่วงราคา</label>
         <input type="text" id="filter_price" name="filter_price" value="" />
      </div>
      @csrf
      <div class="form-group mb-0 mt-4 mt-lg-0 col-lg-12">
         <label></label>
         <button class="btn btn-search form-control" type="submit" name="button"><img src='/assets/img/filter/search.png' class='icon-search'>ค้นหา</button>
      </div>
   </form>
</div>

<!-- Mobile Filter -->
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <p class="d-md-block d-lg-none d-xl-none">
        <a class="btn btn-primary form-control" data-toggle="collapse" href="#mobilesearch" role="button" aria-expanded="false" aria-controls="mobilesearch">
          กล่องค้นหา
        </a>
      </p>
    </div>
  </div>
</div>
<div class="collapse" id="mobilesearch">
  <div class="card card-body">
    <div class="filter mb-4 col-lg-12 d-md-block d-lg-none d-xl-none">
       <h3><img src='/assets/img/filter/globe.png' class='icon-title'>ค้นหาโปรแกรมทัวร์</h3>
       <form class="row" action="/filter-result" method="get">
          <div class="form-group col-lg-3">
             <label>สถานที่จะไป</label>
             <div class="input-group">
                <div class="input-group-prepend">
                   <span class="input-group-text" id="basic-addon1"><i class="fas fa-city"></i></span>
                </div>
                <input class="form-control" type="text" name="filter_name" value="" placeholder="ชื่อประเทศ/เมือง">
             </div>
          </div>
          <div class="form-group col-lg-3">
             <label>ประเทศ/เมือง</label>
             <div class="input-group">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-globe-asia"></i></span>
               </div>
                <select class="form-control" name="filter_country">
                   <option value="">เลือกประเทศ/เมือง</option>
                   @foreach($filter_country as $all_country)
                   <option value="{{$all_country->_id}}">{{$all_country->country_name}}</option>
                   @endforeach
                </select>
             </div>
          </div>
          <div class="form-group col-lg-3">
             <label>วันเดินทาง</label>
             <div class="input-group">
                <div class="input-group-prepend">
                   <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
                </div>
                <input class="form-control" type="date" name="filter_start_date" value="" placeholder="วันไป">
             </div>
          </div>
          <div class="form-group col-lg-3">
             <label>วันกลับ</label>
             <div class="input-group">
                <div class="input-group-prepend">
                   <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
                </div>
                <input class="form-control" type="date" name="filter_end_date" value="" placeholder="วันกลับ">
             </div>
          </div>
          <div class="form-group col-lg-3">
             <label>สายการบิน</label>
             <div class="input-group">
                <div class="input-group-prepend">
                   <span class="input-group-text" id="basic-addon1"><i class="fas fa-plane"></i></span>
                </div>
                <select class="form-control" name="filter_airline">
                  <option value="">เลือกสายการบิน</option>
                   @foreach($airline as $all_airline)
                   <option value="{{$all_airline->_id}}">{{$all_airline->airline_name}}</option>
                   @endforeach
                </select>
             </div>
          </div>
          <div class="col-lg-3">
             <label>รหัสทัวร์</label>
             <div class="input-group">
                <div class="input-group-prepend">
                   <span class="input-group-text" id="basic-addon1"><i class="fas fa-list-ol"></i></span>
                </div>
                <input class="form-control" type="text" name="filter_code" value="" placeholder="รหัสทัวร์">
             </div>
          </div>
          <div class="form-group col-lg-6 mt-3 mt-lg-0">
             <label>ช่วงราคา</label>
             <input type="text" id="filter_price" name="filter_price" value="" />
          </div>
          @csrf
          <div class="form-group mb-0 mt-4 mt-lg-0 col-lg-12">
             <label></label>
             <button class="btn btn-search form-control" type="submit" name="button"><img src='/assets/img/filter/search.png' class='icon-search'>ค้นหา</button>
          </div>
       </form>
    </div>
  </div>
</div>

<!-- End Mobile Filter -->
