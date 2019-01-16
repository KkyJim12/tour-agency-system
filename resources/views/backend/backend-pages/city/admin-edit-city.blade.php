@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>แก้ไขหมวดหมู่ประเทศ <i class="fas fa-flag"></i></h3>
@endsection

@section('content')
<div class="container">
  <div class="row">
      <form class="admin-form col-lg-6 col-md-6 col-sm-6" action="/admin/admin-edit-city-process/{{$city->_id}}" method="post" enctype="multipart/form-data">
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
          <label>ชื่อประเทศ</label>
          <input class="form-control" type="text" name="city_name" placeholder="ชื่อประเทศ" value="{{$city->city_name}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ลำดับที่</label>
          <input class="form-control" type="number" name="city_sort" placeholder="ลำดับที่" value="{{$city->city_sort}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>หมวดหมู่ประเทศ</label>
          <select class="form-control" name="country_id">
            @foreach($country as $all_country)
              <option value="{{$all_country->_id}}" @if($city->country_id == $all_country->_id) selected @endif>
                {{$all_country->country_name}}
              </option>
            @endforeach
          </select>
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ซ่อน</label>&nbsp
          @if($city->city_hide == null)
          <input type="checkbox" name="city_hide" value="1">
          @else
          <input type="checkbox" name="city_hide" value="1" checked>
          @endif
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>รูปภาพ</label>
          <input type="file" name="city_img">
          <br>
          <img class="admin-img-edit" src="/assets/img/upload/city/{{$city->city_img}}" alt="city_img">
        </div>
        <input type="hidden" name="city_id" value="{{$city->_id}}">
        @csrf
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <button class="btn btn-warning form-control" type="submit" name="button">แก้ไข</button>
        </div>
      </form>
  </div>
</div>
@endsection
