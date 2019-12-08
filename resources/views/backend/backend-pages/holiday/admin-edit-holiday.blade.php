@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>แก้ไขวันหยุดพิเศษ <i class="fas fa-calendar-alt"></i></h3>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
      <form class="col-lg-6 col-md-6 col-sm-6 admin-form" action="/admin/admin-edit-holiday-process" method="post" enctype="multipart/form-data">
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
          <label>ชื่อวันหยุด</label>
          <input class="form-control" type="text" name="holiday_name" placeholder="ชื่อวันหยุด" value="{{$holiday->holiday_name}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ลำดับที่</label>
          <input class="form-control" type="number" name="holiday_sort" placeholder="ลำดับที่" value="{{$holiday->holiday_sort}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ซ่อน</label>&nbsp
          @if($holiday->holiday_hide)
          <input type="checkbox" name="holiday_hide" value="1" checked>
          @else
          <input type="checkbox" name="holiday_hide" value="1">
          @endif
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>รูปภาพ</label>
          <input type="file" name="holiday_img">
        </div>
        <input type="hidden" name="holiday_id" value="{{$holiday->_id}}">
        @csrf
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <button class="btn btn-warning form-control" type="submit" name="button">แก้ไขวันหยุด</button>
        </div>
      </form>
  </div>
</div>
@endsection
