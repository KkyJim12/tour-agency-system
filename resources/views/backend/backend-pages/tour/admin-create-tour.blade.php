@extends('backend.backend-layouts.admin-master')
@section('content-header')
<h3>สร้างทัวร์ <i class="fas fa-map-marked-alt"></i></h3>
@endsection
@section('content')
<div class="container-fluid">
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
            <label>ราคาทัวร์ที่จะโชว์</label>
            <input class="form-control" type="number" name="tour_price_show" placeholder="ราคาทัวร์ที่จะโชว์">
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
               <option value="">วันหยุดพิเศษ</option>
               @foreach($holiday as $all_holiday)
               <option value="{{$all_holiday->_id}}">{{$all_holiday->holiday_name}}</option>
               @endforeach
            </select>
         </div>
         <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
            <label>ช่วงเวลาเดินทาง (เริ่มต้น)</label>
            <select class="form-control" name="tour_month">
               <option value="">เลือกเดือน</option>
               <option value="มกราคม">มกราคม</option>
               <option value="กุมภาพันธ์">กุมภาพันธ์</option>
               <option value="มีนาคม">มีนาคม</option>
               <option value="เมษายน">เมษายน</option>
               <option value="พฤษภาคม">พฤษภาคม</option>
               <option value="มิถุนายน">มิถุนายน</option>
               <option value="กรกฎาคม">กรกฎาคม</option>
               <option value="สิงหาคม">สิงหาคม</option>
               <option value="กันยายน">กันยายน</option>
               <option value="ตุลาคม">ตุลาคม</option>
               <option value="พฤษจิกายน">พฤษจิกายน</option>
               <option value="ธันวาคม">ธันวาคม</option>
            </select>
         </div>
         <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
            <label>ช่วงเวลาเดินทาง (สุดท้าย)</label>
            <select class="form-control" name="tour_month_last">
               <option value="">เลือกเดือน</option>
               <option value="มกราคม">มกราคม</option>
               <option value="กุมภาพันธ์">กุมภาพันธ์</option>
               <option value="มีนาคม">มีนาคม</option>
               <option value="เมษายน">เมษายน</option>
               <option value="พฤษภาคม">พฤษภาคม</option>
               <option value="มิถุนายน">มิถุนายน</option>
               <option value="กรกฎาคม">กรกฎาคม</option>
               <option value="สิงหาคม">สิงหาคม</option>
               <option value="กันยายน">กันยายน</option>
               <option value="ตุลาคม">ตุลาคม</option>
               <option value="พฤษจิกายน">พฤษจิกายน</option>
               <option value="ธันวาคม">ธันวาคม</option>
            </select>
         </div>
         <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
            <label>ราคาก่อนลด</label>
            <input class="form-control" type="number" name="tour_discount" placeholder="ราคาก่อนลด">
         </div>
         <!-- Add Day Function -->

         <hr />
         <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
            <label>วันเดินทาง (1)</label>
            <input class="form-control" type="date" name="tour_start_date[]" placeholder="วันเดินทาง">
         </div>
         <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
            <label>วันกลับ (1)</label>
            <input class="form-control" type="date" name="tour_end_date[]" placeholder="วันกลับ">
         </div>
         <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
            <label>ราคา (1)</label>
            <input class="form-control" type="number" name="tour_price[]" placeholder="ราคา">
         </div>
         <div id="divAdditionalTourDates">

         </div>

         <hr />
         <a class="btn btn-block btn-info" id="btnAddTourDate" href="#">เพิ่มวันเดินทางอื่น</a>
         <hr />

         <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
            <label>วันหมดเขตจอง</label>
            <input class="form-control" type="date" name="tour_expire_date" placeholder="วันหมดเขตจอง">
         </div>
         <!-- End Add Day Function -->
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
<script>
    tdIndex = 2;
    $("#btnAddTourDate").click(function(e){
        e.preventDefault();
        $("#divAdditionalTourDates").append("<span class=\"additionalTourDateItemGrp\"></div><hr /><div class=\"input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input\"> \
        <label>วันเดินทาง (" + tdIndex + ")</label> \
        <input class=\"form-control\" type=\"date\" name=\"tour_start_date[]\" placeholder=\"วันเดินทาง\"> \
        </div> \<div class=\"input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input\"> \
        <label>วันกลับ (" + tdIndex + ")</label> \
        <input class=\"form-control\" type=\"date\" name=\"tour_end_date[]\" placeholder=\"วันกลับ\"> \
        </div> \
        <div class=\"input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input\"> \
        <label>ราคา (" + tdIndex + ")</label> \
        <input class=\"form-control\" type=\"number\" name=\"tour_price[]\" placeholder=\"ราคา\"> \
        </div><a class=\"btn btn-sm btn-danger btnDeleteThisDateGroup\" href=\"#\">ลบวันเดินทาง/วันกลับชุดนี้ (" + tdIndex + ")</a></span>");
        tdIndex++;
    });
    $("#divAdditionalTourDates").on('click', '.btnDeleteThisDateGroup', function(e) {
        e.preventDefault();
        $(this).closest("span").remove();
    });
</script>
@endsection
