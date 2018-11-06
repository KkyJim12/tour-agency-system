@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>แก้ไขหมวดหมู่ประเทศ <i class="fas fa-flag"></i></h3>
@endsection

@section('content')
<div class="container">
  <div class="row">
      <form class="admin-form col-lg-6 col-md-6 col-sm-6" action="/admin/admin-edit-country-process/{{$country->_id}}" method="post" enctype="multipart/form-data">
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
          <input class="form-control" type="text" name="country_name" placeholder="ชื่อประเทศ" value="{{$country->country_name}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ลำดับที่</label>
          <input class="form-control" type="number" name="country_sort" placeholder="ลำดับที่" value="{{$country->country_sort}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>หมวดหมู่ประเทศ</label>
          <select class="form-control" name="continent_id">
            @foreach($continent as $all_continent)
              <option value="{{$all_continent->_id}}" @if($country->continent_id == $all_continent->_id) selected @endif>
                {{$all_continent->continent_name}}
              </option>
            @endforeach
          </select>
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ซ่อน</label>&nbsp
          @if($country->country_hide == null)
          <input type="checkbox" name="country_hide" value="1">
          @else
          <input type="checkbox" name="country_hide" value="1" checked>
          @endif
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>รูปภาพ</label>
          <input type="file" name="country_img">
          <br>
          <img class="admin-img-edit" src="/assets/img/upload/country/{{$country->country_img}}" alt="country_img">
        </div>
        <input type="hidden" name="country_id" value="{{$country->_id}}">
        @csrf
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <button class="btn btn-success form-control" type="submit" name="button">สร้างประเทศ</button>
        </div>
      </form>
  </div>
</div>
@endsection
