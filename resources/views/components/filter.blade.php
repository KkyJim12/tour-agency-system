<div class="filter mb-4 col-md-12">
    <h3>ค้นหาโปรแกรมทัวร์</h3>
    <form class="row" action="/filter-result" method="post">
      <div class="form-group col-md-3">
        <label>สถานที่จะไป</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-city"></i></span>
          </div>
          <input class="form-control" type="text" name="filter_name" value="" placeholder="ชื่อประเทศ/เมือง">
        </div>
      </div>
      <div class="form-group col-md-3">
        <label>ประเทศ/เมือง</label>
        <div class="input-group">
          <select class="form-control" name="">
            <option value="">เลือกประเทศ/เมือง</option>
            @foreach($filter_country as $all_country)
            <option value="{{$all_country->_id}}">{{$all_country->country_name}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group col-md-3">
        <label>วันเดินทาง</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
          </div>
          <input class="form-control" type="date" name="filter_start_date" value="" placeholder="วันไป">
        </div>
      </div>
      <div class="form-group col-md-3">
        <label>วันกลับ</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
          </div>
          <input class="form-control" type="date" name="filter_end_date" value="" placeholder="วันกลับ">
        </div>
      </div>
      <div class="form-group col-md-3">
        <label>สายการบิน</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-plane"></i></span>
          </div>
          <select class="form-control" name="filter_airline">
            @foreach($airline as $all_airline)
            <option value="{{$all_airline->_id}}">{{$all_airline->airline_name}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="col-md-3">
        <label>รหัสทัวร์</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-list-ol"></i></span>
          </div>
        <input class="form-control" type="text" name="filter_code" value="" placeholder="รหัสทัวร์">
      </div>
      </div>
      <div class="form-group col-md-6">
        <label>ช่วงราคา</label>
        <input type="text" id="filter_price" name="filter_price" value="" />
      </div>
      @csrf
      <div class="form-group col-md-12">
        <label></label>
        <button class="btn btn-success form-control" type="submit" name="button">ค้นหา</button>
      </div>
    </form>
  </div>
