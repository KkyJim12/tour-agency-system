@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>แก้ไข <i class="fas fa-map-marked-alt"></i></h3>
@endsection

@section('content')
<div class="container">
  <div class="row">
      <form class="admin-form col-lg-6 col-md-6 col-sm-6" action="/admin/admin-edit-tour-process/{{$tour->_id}}" method="post" enctype="multipart/form-data">
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ชื่อทัวร์</label>
          <input class="form-control" type="text" name="tour_name" placeholder="ชื่อทัวร์" value="{{$tour->tour_name}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ราคา</label>
          <input class="form-control" type="number" name="tour_price" placeholder="ราคา" value="{{$tour->tour_price}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>พนักงาน</label>
          <select class="form-control" name="tour_staff">
            @foreach($staff as $all_staff)
            <option value="{{$all_staff->_id}}">{{$all_staff->staff_name}}</option>
            @endforeach
          </select>
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ประเทศ</label>
          <select class="form-control" name="tour_country">
            @foreach($country as $all_country)
            <option value="{{$all_country->_id}}">{{$all_country->country_name}}</option>
            @endforeach
          </select>
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>สายการบิน</label>
          <select class="form-control" name="tour_airline">
            @foreach($airline as $all_airline)
            <option value="{{$all_airline->_id}}">{{$all_airline->airline_name}}</option>
            @endforeach
          </select>
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>วันเดินทาง</label>
          <input class="form-control" type="date" name="tour_start_date" placeholder="วันเดินทาง" value="{{$tour->tour_start_date}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>วันกลับ</label>
          <input class="form-control" type="date" name="tour_end_date" placeholder="วันกลับ" value="{{$tour->tour_end_date}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>วันหมดเขตจอง</label>
          <input class="form-control" type="date" name="tour_expire_date" placeholder="วันหมดเขตจอง" value="{{$tour->tour_expire_date}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>จำนวนวัน</label>
          <input class="form-control" type="number" name="tour_day" placeholder="จำนวนวัน" value="{{$tour->tour_day}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>จำนวนคืน</label>
          <input class="form-control" type="number" name="tour_night" placeholder="จำนวนคืน" value="{{$tour->tour_night}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>โปรแกรมไฮไลท์</label>
          <textarea class="form-control" name="tour_hightlight" rows="8" cols="80" placeholder="โปรแกรมไฮไลท์">{{$tour->tour_highlight}}</textarea>
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>เงื่อนไขเพิ่มเติม</label>
          <textarea class="form-control" name="tour_condition" rows="8" cols="80" placeholder="เงื่อนไขเพิ่มเติม">{{$tour->tour_condition}}</textarea>
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ลำดับที่</label>
          <input class="form-control" type="number" name="tour_sort" placeholder="ลำดับที่" value="{{$tour->tour_sort}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ซ่อน</label>&nbsp
          @if($tour->tour_hide == null)
          <input type="checkbox" name="tour_hide" value="1">
          @else
          <input type="checkbox" name="tour_hide" value="1" checked>
          @endif
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ไฟล์ PDF</label>
          <input class="form-control" type="file" name="tour_pdf">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>รูปหลัก</label>
          <input class="form-control" type="file" name="tour_img">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>รูปเพิ่มเติม</label>
          <input class="form-control" type="file" name="tour_other_img[]" multiple>
        </div>
        <input type="hidden" name="tour_id" value="{{$tour->_id}}">
        @csrf
        <button class="form-control btn btn-warning" type="submit" name="button">แก้ไขทัวร์</button>
      </form>
  </div>
</div>
@endsection
