@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>สร้างหมวดหมู่ประเทศ <i class="fas fa-flag"></i></h3>
@endsection

@section('content')
<div class="container">
  <div class="row">
      <form class="col-lg-6 col-md-6 col-sm-6 admin-form" action="/admin/admin-create-country-process" method="post" enctype="multipart/form-data">
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ชื่อประเทศ</label>
          <input class="form-control" type="text" name="country_name" placeholder="ชื่อประเทศ">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ลำดับที่</label>
          <input class="form-control" type="number" name="country_sort" placeholder="ลำดับที่">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>หมวดหมู่ประเทศ</label>
          <select class="form-control" name="continent_id">
            @foreach($continent as $all_continent)
            <option value="{{$all_continent->_id}}">{{$all_continent->continent_name}}</option>
            @endforeach
          </select>
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ซ่อน</label>&nbsp
          <input type="checkbox" name="country_hide" value="1">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>รูปภาพ</label>
          <input type="file" name="country_img">
        </div>
        @csrf
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <button class="btn btn-success form-control" type="submit" name="button">สร้างประเทศ</button>
        </div>
      </form>
  </div>
</div>
@endsection
