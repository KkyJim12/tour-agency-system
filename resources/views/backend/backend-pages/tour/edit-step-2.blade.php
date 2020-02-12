@extends('backend.backend-layouts.admin-master')
@section('content-header')
<h3>เพิ่มวันเดินทาง <i class="fas fa-map-marked-alt"></i></h3>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <ol class="breadcrumb">
                <li><a href="/admin/admin-edit-tour-step/{{$tour->_id}}">ข้อมูลทั่วไป</a></li>
                <li><a href="/admin/admin-edit-tour-step-1/{{$tour->_id}}">ข้อมูลอื่นๆ</a></li>
                <li class="active">เพิ่มวันเดินทาง</li>
                <li><a href="/admin/admin-edit-tour-step-3/{{$tour->_id}}">รูปภาพ และ PDF</a></li>
                <li><a href="/admin/admin-edit-tour-step-4/{{$tour->_id}}">ตั่งค่า SEO</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <!-- Column 3 -->
        <div class="col-lg-6 col-md-6 col-sm-6">
            <form class="admin-form" action="/admin/admin-edit-tour-step-2/{{$tour->_id}}" method="post" enctype="multipart/form-data">
                <!-- Add Day Function -->
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
                    <?php $newTdIndex++;
                    $actualIndex++; ?>
                    @endforeach

                </div>

                <hr />
                <a class="btn btn-block btn-info" id="btnAddTourDate" href="#">เพิ่มวันเดินทางอื่น</a>
                <hr />
                <!-- End Add Day Function -->
                @csrf
                <button class="btn btn-primary form-control" type="submit" name="button">ต่อไป</button>
            </form>
        </div>
        <!-- End Column 3 -->

    </div>
</div>

<script>
    tdIndex = {
        {
            (int) $newTdIndex - 1
        }
    };
    $("#btnAddTourDate").click(function(e) {
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