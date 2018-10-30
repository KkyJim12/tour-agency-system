@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>แก้ไขหมวดหมู่ทวีป</h3>
@endsection

@section('content')
<div class="container">
  <div class="row">
      <form action="/admin/admin-edit-continent-process/{{$continent->_id}}" method="post" enctype="multipart/form-data">
        <div class="input-group col-md-12">
          <label>ชื่อทวีป</label>
          <input class="form-control col-md-12" type="text" name="continent_name" placeholder="ชื่อทวีป" value="{{$continent->continent_name}}">
        </div>
        <div class="input-group col-md-3">
          <label>ลำดับที่</label>
          <input class="form-control col-md-3" type="number" name="continent_sort" placeholder="ลำดับที่" value="{{$continent->continent_sort}}">
        </div>
        <div class="input-group col-md-6">
          <label>ซ่อน</label>&nbsp
          @if($continent->continent_hide == 1)
          <input type="checkbox" name="continent_hide" value="1" checked>
          @else
          <input type="checkbox" name="continent_hide" value="1">
          @endif
        </div>
        <div class="input-group col-md-6">
          <label>รูปภาพ</label>
          <input type="file" name="continent_img">
          <img class="admin-img-edit" src="/assets/img/upload/continent/{{$continent->continent_img}}" alt="continent_img">
        </div>
        <input type="hidden" name="continent_id" value="{{$continent->_id}}">
        @csrf
        <div class="input-group col-md-12">
          <button class="btn btn-success form-control" type="submit" name="button">สร้างทวีป</button>
        </div>
      </form>
  </div>
</div>
@endsection
