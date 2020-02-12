@extends('backend.backend-layouts.admin-master')
@section('content-header')
<h3>สร้างทัวร์ <i class="fas fa-map-marked-alt"></i></h3>
@endsection
@section('content')
<div class="container-fluid">
   <div class="row">

      <!-- Column 1 -->
      <div class="col-lg-6 col-md-6 col-sm-6">
         <form class="admin-form" action="/admin/admin-add-tour" method="post" enctype="multipart/form-data">
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
               <label>รหัสทัวร์</label><small> (ขึ้นต้นด้วย T1234)</small>
               <input class="form-control" type="text" name="tour_code" placeholder="รหัสทัวร์">
            </div>
            <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
               <label>ชื่อทัวร์</label>
               <input class="form-control" type="text" name="tour_name" placeholder="ชื่อทัวร์">
            </div>
            <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
               <label>ราคาทัวร์ที่จะโชว์</label>
               <input class="form-control" type="number" name="tour_price_show" placeholder="ราคาทัวร์ที่จะโชว์">
            </div>
            <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
               <label>ราคาก่อนลด (ไม่จำเป็นต้องใส่)</label>
               <input class="form-control" type="number" name="tour_discount" placeholder="ราคาก่อนลด">
            </div>
            <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
               <label>พนักงาน</label>
               <select class="form-control" name="tour_staff">
                  <option>เลือกพนักงาน</option>
                  @foreach($staff as $all_staff)
                  <option value="{{$all_staff->_id}}">{{$all_staff->staff_name}}</option>
                  @endforeach
               </select>
            </div>
            <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
               <label>ประเทศ</label>
               <select class="form-control" name="tour_country">
                  <option>เลือกประเทศ</option>
                  @foreach($country as $all_country)
                  <option value="{{$all_country->_id}}">{{$all_country->country_name}}</option>
                  @endforeach
               </select>
            </div>
            <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
               <label>สายการบิน</label>
               <select class="form-control" name="tour_airline">
                  <option>เลือกสายการบิน</option>
                  @foreach($airline as $all_airline)
                  <option value="{{$all_airline->_id}}">{{$all_airline->airline_name}}</option>
                  @endforeach
               </select>
            </div>
            <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
               <label>ช่วงเวลาเดินทาง (เริ่มต้น)</label>
               <select class="form-control" name="tour_month">
                  <option value="">เลือกเดือน</option>
                  <option value="1">มกราคม</option>
                  <option value="2">กุมภาพันธ์</option>
                  <option value="3">มีนาคม</option>
                  <option value="4">เมษายน</option>
                  <option value="5">พฤษภาคม</option>
                  <option value="6">มิถุนายน</option>
                  <option value="7">กรกฎาคม</option>
                  <option value="8">สิงหาคม</option>
                  <option value="9">กันยายน</option>
                  <option value="10">ตุลาคม</option>
                  <option value="11">พฤษจิกายน</option>
                  <option value="12">ธันวาคม</option>
               </select>
            </div>
            <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
               <label>ช่วงเวลาเดินทาง (สุดท้าย)</label>
               <select class="form-control" name="tour_month_last">
                  <option value="">เลือกเดือน</option>
                  <option value="1">มกราคม</option>
                  <option value="2">กุมภาพันธ์</option>
                  <option value="3">มีนาคม</option>
                  <option value="4">เมษายน</option>
                  <option value="5">พฤษภาคม</option>
                  <option value="6">มิถุนายน</option>
                  <option value="7">กรกฎาคม</option>
                  <option value="8">สิงหาคม</option>
                  <option value="9">กันยายน</option>
                  <option value="10">ตุลาคม</option>
                  <option value="11">พฤษจิกายน</option>
                  <option value="12">ธันวาคม</option>
               </select>
            </div>
            <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
               <label>จำนวนวัน</label>
               <input class="form-control" type="number" name="tour_day" placeholder="จำนวนวัน">
            </div>
            <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
               <label>จำนวนคืน</label>
               <input class="form-control" type="number" name="tour_night" placeholder="จำนวนคืน">
            </div>
            <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
               <label>ลำดับที่</label>
               <input class="form-control" type="number" name="tour_sort" placeholder="ลำดับที่">
            </div>
            @csrf
            <button class="btn btn-primary form-control" type="submit" name="button">ต่อไป</button>
         </form>
      </div>
      <!-- End Column 1 -->
   </div>
</div>
@endsection