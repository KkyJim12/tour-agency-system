@extends('backend.backend-layouts.admin-master')
@section('content-header')
<h3>แก้ไขทัวร์ <i class="fas fa-map-marked-alt"></i></h3>
@endsection
@section('content')
<div class="container-fluid">
   <div class="row">
      <!-- Column 1 -->
      <div class="col-lg-6 col-md-6 col-sm-6">
         <form class="admin-form" action="/admin/admin-edit-tour-step/{{$tour->_id}}" method="post" enctype="multipart/form-data">
            @if ($errors->any())
            <div class="alert alert-danger">
               <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
               </ul>
            </div>
            @endif
            <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
               <label>รหัสทัวร์</label> <small> (ขึ้นต้นด้วย T1234)</small>
               <input class="form-control" type="text" name="tour_code" placeholder="รหัสทัวร์" value="{{substr($tour->tour_code,6)}}">
            </div>
            <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
               <label>ชื่อทัวร์</label>
               <input class="form-control" type="text" name="tour_name" placeholder="ชื่อทัวร์" value="{{$tour->tour_name}}">
            </div>
            <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
               <label>ราคาทัวร์ที่จะโชว์</label>
               <input class="form-control" type="number" name="tour_price_show" placeholder="ราคาทัวร์ที่จะโชว์" value="{{$tour->tour_price_show}}">
            </div>
            <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
               <label>ราคาก่อนลด (ไม่จำเป็นต้องใส่)</label>
               <input class="form-control" type="number" name="tour_discount" placeholder="ราคาก่อนลด" value="{{$tour->tour_discount}}">
            </div>
            <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
               <label>พนักงาน</label>
               <select class="form-control" name="tour_staff">
                  <option>เลือกพนักงาน</option>
                  @foreach($staff as $all_staff)
                  <option value="{{$all_staff->_id}}" @if($all_staff->_id == $tour->tour_staff_id) selected @endif>{{$all_staff->staff_name}}</option>
                  @endforeach
               </select>
            </div>
            <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
               <label>ประเทศ</label>
               <select class="form-control" name="tour_country">
                  <option>เลือกประเทศ</option>
                  @foreach($country as $all_country)
                  <option value="{{$all_country->_id}}" @if($all_country->_id == $tour->tour_country_id) selected @endif>{{$all_country->country_name}}</option>
                  @endforeach
               </select>
            </div>
            <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
               <label>สายการบิน</label>
               <select class="form-control" name="tour_airline">
                  <option>เลือกสายการบิน</option>
                  @foreach($airline as $all_airline)
                  <option value="{{$all_airline->_id}}" @if($all_airline->_id == $tour->tour_airline_id) selected @endif>{{$all_airline->airline_name}}</option>
                  @endforeach
               </select>
            </div>
            <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
               <label>ช่วงเวลาเดินทาง (เริ่มต้น)</label>
               <select class="form-control" name="tour_month">
                  <option value="">เลือกเดือน</option>
                  <option value="1" @if($tour->tour_month == 1) selected @endif>มกราคม</option>
                  <option value="2" @if($tour->tour_month == 2) selected @endif>กุมภาพันธ์</option>
                  <option value="3" @if($tour->tour_month == 3) selected @endif>มีนาคม</option>
                  <option value="4" @if($tour->tour_month == 4) selected @endif>เมษายน</option>
                  <option value="5" @if($tour->tour_month == 5) selected @endif>พฤษภาคม</option>
                  <option value="6" @if($tour->tour_month == 6) selected @endif>มิถุนายน</option>
                  <option value="7" @if($tour->tour_month == 7) selected @endif>กรกฎาคม</option>
                  <option value="8" @if($tour->tour_month == 8) selected @endif>สิงหาคม</option>
                  <option value="9" @if($tour->tour_month == 9) selected @endif>กันยายน</option>
                  <option value="10" @if($tour->tour_month == 10) selected @endif>ตุลาคม</option>
                  <option value="11" @if($tour->tour_month == 11) selected @endif>พฤษจิกายน</option>
                  <option value="12" @if($tour->tour_month == 12) selected @endif>ธันวาคม</option>
               </select>
            </div>
            <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
               <label>ช่วงเวลาเดินทาง (สุดท้าย)</label>
               <select class="form-control" name="tour_month_last">
                  <option value="">เลือกเดือน</option>
                  <option value="1" @if($tour->tour_month_last == 1) selected @endif>มกราคม</option>
                  <option value="2" @if($tour->tour_month_last == 2) selected @endif>กุมภาพันธ์</option>
                  <option value="3" @if($tour->tour_month_last == 3) selected @endif>มีนาคม</option>
                  <option value="4" @if($tour->tour_month_last == 4) selected @endif>เมษายน</option>
                  <option value="5" @if($tour->tour_month_last == 5) selected @endif>พฤษภาคม</option>
                  <option value="6" @if($tour->tour_month_last == 6) selected @endif>มิถุนายน</option>
                  <option value="7" @if($tour->tour_month_last == 7) selected @endif>กรกฎาคม</option>
                  <option value="8" @if($tour->tour_month_last == 8) selected @endif>สิงหาคม</option>
                  <option value="9" @if($tour->tour_month_last == 9) selected @endif>กันยายน</option>
                  <option value="10" @if($tour->tour_month_last == 10) selected @endif>ตุลาคม</option>
                  <option value="11" @if($tour->tour_month_last == 11) selected @endif>พฤษจิกายน</option>
                  <option value="12" @if($tour->tour_month_last == 12) selected @endif>ธันวาคม</option>
               </select>
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
               <label>ลำดับที่</label>
               <input class="form-control" type="number" name="tour_sort" placeholder="ลำดับที่" value="{{$tour->tour_sort}}">
            </div>
            @csrf
            <button class="btn btn-primary form-control" type="submit" name="button">ต่อไป</button>
         </form>
      </div>
      <!-- End Column 1 -->
   </div>
</div>
@endsection