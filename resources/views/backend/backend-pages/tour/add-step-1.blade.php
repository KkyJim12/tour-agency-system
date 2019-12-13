@extends('backend.backend-layouts.admin-master')
@section('content-header')
<h3>เพิ่มรายละเอียดทัวร์<i class="fas fa-map-marked-alt"></i></h3>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Column 2 -->
        <div class="col-lg-6 col-md-6 col-sm-6">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form class="admin-form" action="/admin/admin-add-tour-step-1/{{$tour_id}}" method="post" enctype="multipart/form-data">
                <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
                    <label>โปรแกรมไฮไลท์</label>
                    <textarea class="form-control mcetext" id="mcetext1" name="tour_hightlight" rows="8" cols="80" placeholder="โปรแกรมไฮไลท์"></textarea>
                </div>
                <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
                    <label>เงื่อนไขเพิ่มเติม</label>
                    <textarea class="form-control mcetext" id="mcetext2" name="tour_condition" rows="8" cols="80" placeholder="เงื่อนไขเพิ่มเติม"></textarea>
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
                    <label>แนะนำ</label>&nbsp
                    <input type="checkbox" name="tour_suggest" value="1">
                </div>
                <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
                    <label>ซ่อน</label>&nbsp
                    <input type="checkbox" name="tour_hide" value="1">
                </div>
                @csrf
                <button class="btn btn-primary form-control" type="submit" name="button">ต่อไป</button>
            </form>
        </div>
        <!-- End Column 2 -->
    </div>
</div>

@endsection