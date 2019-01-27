@extends('backend.backend-layouts.admin-master')
@section('content-header')
<h3>แก้ไข <i class="fas fa-map-marked-alt"></i></h3>
@endsection
@section('content')
<div class="container">
   <div class="row">
      <form class="admin-form col-lg-6 col-md-6 col-sm-6" action="/admin/admin-edit-tour-process/{{$tour->_id}}" method="post" enctype="multipart/form-data">
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
            <input class="form-control" type="text" name="tour_code" placeholder="รหัสทัวร์" value="{{$tour->tour_code}}">
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
            <label>พนักงาน</label>
            <select class="form-control" name="tour_staff">
               <option>เลือกพนักงาน</option>
               @foreach($staff as $all_staff)
               <option value="{{$all_staff->_id}}" @if($tour->tour_staff_id == $all_staff->_id) selected @endif>{{$all_staff->staff_name}}</option>
               @endforeach
            </select>
         </div>
         <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
            <label>ประเทศ</label>
            <select class="form-control" name="tour_country">
               <option>เลือกประเทศ</option>
               @foreach($country as $all_country)
               <option value="{{$all_country->_id}}" @if($tour->tour_country_id == $all_country->_id) selected @endif>{{$all_country->country_name}}</option>
               @endforeach
            </select>
         </div>
         <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
            <label>สายการบิน</label>
            <select class="form-control" name="tour_airline">
               <option>เลือกสายการบิน</option>
               @foreach($airline as $all_airline)
               <option value="{{$all_airline->_id}}" @if($tour->tour_airline_id == $all_airline->_id) selected @endif>{{$all_airline->airline_name}}</option>
               @endforeach
            </select>
         </div>
         <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
            <label>วันหยุดพิเศษ (ไม่จำเป็นต้องใส่)</label>
            <select class="form-control" name="tour_holiday">
               <option value="">วันหยุดพิเศษ</option>
               @foreach($holiday as $all_holiday)
               <option value="{{$all_holiday->_id}}" @if($tour->tour_holiday_id == $all_holiday->_id) selected @endif>{{$all_holiday->holiday_name}}</option>
               @endforeach
            </select>
         </div>
         <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
            <label>เดือนที่เดินทาง</label>
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
            <label>ราคาก่อนลด</label>
            <input class="form-control" type="number" name="tour_discount" placeholder="ราคาก่อนลด" value="{{$tour->tour_discount}}">
         </div>

         <hr />


         <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
            <label>วันเดินทาง (1)</label>
            <input class="form-control" type="date" name="tour_start_date[]" placeholder="วันเดินทาง" value="{{$tour->tour_start_date[0]}}">
         </div>
         <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
            <label>วันกลับ (1)</label>
            <input class="form-control" type="date" name="tour_end_date[]" placeholder="วันกลับ" value="{{$tour->tour_end_date[0]}}">
         </div>
         <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
            <label>ราคา (1)</label>
            <input class="form-control" type="number" name="tour_price[]" placeholder="ราคา" value="{{$tour->tour_price[0]}}">
         </div>

         <div id="divAdditionalTourDates">
             <?php
                $newTdIndex = 2;
                $actualIndex = 1;
                $fiSkipped = false;
             ?>
             @foreach($tour->tour_start_date as $tourDate)
                @if($fiSkipped)
                    <?php $fiSkipped = true; ?>
                @else
                    @if(isset($tour->tour_start_date[$actualIndex]) and isset($tour->tour_end_date[$actualIndex]) and isset($tour->tour_price[$actualIndex]) )
                    <hr />
                    <span>
                        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
                           <label>วันเดินทาง ({{ $newTdIndex }})</label>
                           <input class="form-control" type="date" name="tour_start_date[]" placeholder="วันเดินทาง" value="{{$tour->tour_start_date[$actualIndex]}}">
                        </div>
                        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
                           <label>วันกลับ ({{ $newTdIndex }})</label>
                           <input class="form-control" type="date" name="tour_end_date[]" placeholder="วันกลับ" value="{{$tour->tour_end_date[$actualIndex]}}">
                        </div>
                        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
                           <label>ราคา ({{ $newTdIndex }})</label>
                           <input class="form-control" type="number" name="tour_price[]" placeholder="ราคา" value="{{$tour->tour_price[$actualIndex]}}">
                        </div>
                        <a class="btn btn-sm btn-danger btnDeleteThisDateGroup" href="#">ลบวันเดินทาง/วันกลับชุดนี้ ({{$newTdIndex}})</a>
                    </span>
                    @endif
                @endif
                <?php $newTdIndex++; $actualIndex++; ?>
             @endforeach

         </div>

         <hr />
         <a class="btn btn-block btn-info" id="btnAddTourDate" href="#">เพิ่มวันเดินทางอื่น</a>
         <hr />


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
            <textarea class="form-control mcetext" name="tour_hightlight" rows="8" cols="80" placeholder="โปรแกรมไฮไลท์">{{$tour->tour_hightlight}}</textarea>
         </div>
         <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
            <label>เงื่อนไขเพิ่มเติม</label>
            <textarea class="form-control mcetext" name="tour_condition" rows="8" cols="80" placeholder="เงื่อนไขเพิ่มเติม">{{$tour->tour_condition}}</textarea>
         </div>
         <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
            <label>ลำดับที่</label>
            <input class="form-control" type="number" name="tour_sort" placeholder="ลำดับที่" value="{{$tour->tour_sort}}">
         </div>
         <!-- Seo Support -->
         <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
            <label>Title (SEO)</label>
            <input class="form-control" type="text" name="tour_seo_title" placeholder="title ของเว็บ" value="{{$tour->tour_seo_title}}">
         </div>
         <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
            <label>meta tag (SEO)</label>
            <input class="form-control" type="text" name="tour_seo_meta" placeholder="คำอธิบายเว็บ เวลา search google" value="{{$tour->tour_seo_meta}}">
         </div>
         <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
            <label>url (SEO)</label>
            <input class="form-control" type="text" name="tour_seo_url" placeholder="url ต่อท้าย" value="{{$tour->tour_seo_url}}">
         </div>
         <!-- End Seo Support -->
         <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
            <label>แนะนำ</label>&nbsp
            @if($tour->tour_suggest == null)
            <input type="checkbox" name="tour_suggest" value="1">
            @else
            <input type="checkbox" name="tour_suggest" value="1" checked>
            @endif
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
<script>
    tdIndex = {{ (int) $newTdIndex - 1 }};
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
@section('script')
<script>
   $(function(){
       tinymce.init({
           selector: ".mcetext",
           theme: "modern",
           plugins: "link code",
           height: 400,
           setup: function(editor) {
               var inp = $('<input id="tinymce-uploader" type="file" name="pic" accept="image/*" style="display:none">');
               $(editor.getElement()).parent().append(inp);

               inp.on("change",function(){
                   var input = inp.get(0);
                   var file = input.files[0];
                   var fr = new FileReader();
                   fr.onload = function() {
                       var img = new Image();
                       img.src = fr.result;
                       editor.insertContent('<img src="'+img.src+'"/>');
                       inp.val('');
                   }
                   fr.readAsDataURL(file);
               });
               editor.addMenuItem("imageupload", {
                   text: "Photo (Upload)",
                   context: "insert",
                   onclick: function() {
                       inp.trigger("click");
                   }
               });
           }
       });
   });
</script>
@endsection
