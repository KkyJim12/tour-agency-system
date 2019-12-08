@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>สร้างหมวดหมู่เมือง <i class="fas fa-city"></i></h3>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
      <form class="admin-form col-lg-6 col-md-6 col-sm-6" action="/admin/admin-create-city-process" method="post" enctype="multipart/form-data">
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
          <label>ชื่อเมือง</label>
          <input class="form-control" type="text" name="city_name" placeholder="ชื่อเมือง">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ลำดับที่</label>
          <input class="form-control" type="number" name="city_sort" placeholder="ลำดับที่">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ประเทศ</label>
          <select class="form-control" name="country_id">
            @foreach($country as $all_country)
            <option value="{{$all_country->_id}}">{{$all_country->country_name}}</option>
            @endforeach
          </select>
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ซ่อน</label>&nbsp
          <input type="checkbox" name="city_hide" value="1">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>รูปภาพ</label>
          <input type="file" name="city_img">
        </div>
        @csrf
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <button class="btn btn-success form-control" type="submit" name="button">สร้างเมือง</button>
        </div>
      </form>
  </div>
</div>
@endsection
