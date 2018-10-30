@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>สร้างหมวดหมู่ประเทศ</h3>
@endsection

@section('content')
<div class="container">
  <div class="row">
      <form action="/admin/admin-create-country-process" method="post" enctype="multipart/form-data">
        <div class="input-group col-md-12">
          <label>ชื่อประเทศ</label>
          <input class="form-control col-md-12" type="text" name="country_name" placeholder="ชื่อประเทศ">
        </div>
        <div class="input-group col-md-3">
          <label>ลำดับที่</label>
          <input class="form-control col-md-3" type="number" name="country_sort" placeholder="ลำดับที่">
        </div>
        <div class="input-group col-md-3">
          <label>หมวดหมู่ประเทศ</label>
          <select class="form-control col-md-3" name="continent_id">
            @foreach($continent as $all_continent)
            <option value="{{$all_continent->_id}}">{{$all_continent->continent_name}}</option>
            @endforeach
          </select>
        </div>
        <div class="input-group col-md-6">
          <label>ซ่อน</label>&nbsp
          <input type="checkbox" name="country_hide" value="1">
        </div>
        <div class="input-group col-md-6">
          <label>รูปภาพ</label>
          <input type="file" name="country_img">
        </div>
        @csrf
        <div class="input-group col-md-12">
          <button class="btn btn-success form-control" type="submit" name="button">สร้างประเทศ</button>
        </div>
      </form>
  </div>
</div>
@endsection
