@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>สร้างทัวร์ <i class="fas fa-map-marked-alt"></i></h3>
@endsection

@section('content')
<div class="container">
  <div class="row">
      <form class="admin-form col-lg-6 col-md-6 col-sm-6" action="/admin/admin-create-tour-process" method="post" enctype="multipart/form-data">
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
          <label>รหัสทัวร์</label>
          <input class="form-control" type="text" name="tour_code" placeholder="รหัสทัวร์">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ชื่อทัวร์</label>
          <input class="form-control" type="text" name="tour_name" placeholder="ชื่อทัวร์">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ราคา</label>
          <input class="form-control" type="number" name="tour_price" placeholder="ราคา">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ราคาก่อนลด</label>
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
          <label>วันหยุดพิเศษ (ไม่จำเป็นต้องใส่)</label>
          <select class="form-control" name="tour_holiday">
            <option>วันหยุดพิเศษ</option>
            @foreach($holiday as $all_holiday)
            <option value="{{$all_holiday->_id}}">{{$all_holiday->holiday_name}}</option>
            @endforeach
          </select>
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>เดือนที่เดินทาง</label>
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
          <label>วันเดินทาง</label>
          <input class="form-control" type="date" name="tour_start_date" placeholder="วันเดินทาง">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>วันกลับ</label>
          <input class="form-control" type="date" name="tour_end_date" placeholder="วันกลับ">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>วันหมดเขตจอง</label>
          <input class="form-control" type="date" name="tour_expire_date" placeholder="วันหมดเขตจอง">
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
          <label>โปรแกรมไฮไลท์</label>
          <textarea class="form-control mcetext" id="mcetext1" name="tour_hightlight" rows="8" cols="80" placeholder="โปรแกรมไฮไลท์"></textarea>
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>เงื่อนไขเพิ่มเติม</label>
          <textarea class="form-control mcetext" id="mcetext2" name="tour_condition" rows="8" cols="80" placeholder="เงื่อนไขเพิ่มเติม"></textarea>
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ลำดับที่</label>
          <input class="form-control" type="number" name="tour_sort" placeholder="ลำดับที่">
        </div>


        <!-- Seo Support -->

        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>Title (SEO)</label>
          <input class="form-control" type="text" name="tour_seo_title" placeholder="title ของเว็บ">
        </div>

        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>meta tag (SEO)</label>
          <input class="form-control" type="text" name="tour_seo_meta" placeholder="คำอธิบายเว็บ เวลา search google">
        </div>

        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>url (SEO)</label>
          <input class="form-control" type="text" name="tour_seo_url" placeholder="url ต่อท้าย">
        </div>

        <!-- End Seo Support -->
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>แนะนำ</label>&nbsp
          <input type="checkbox" name="tour_suggest" value="1">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ซ่อน</label>&nbsp
          <input type="checkbox" name="tour_hide" value="1">
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
        @csrf
        <button class="btn btn-success" type="submit" name="button">สร้างทัวร์</button>
      </form>
  </div>
</div>
@endsection
