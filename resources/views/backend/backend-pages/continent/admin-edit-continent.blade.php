@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>แก้ไขหมวดหมู่ทวีป <i class="fas fa-globe-asia"></i></h3>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
      <form class="admin-form col-lg-6 col-md-6 col-sm-6" action="/admin/admin-edit-continent-process/{{$continent->_id}}" method="post" enctype="multipart/form-data">
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
          <label>ชื่อทวีป</label>
          <input class="form-control col-md-12" type="text" name="continent_name" placeholder="ชื่อทวีป" value="{{$continent->continent_name}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ลำดับที่</label>
          <input class="form-control col-md-3" type="number" name="continent_sort" placeholder="ลำดับที่" value="{{$continent->continent_sort}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ซ่อน</label>&nbsp
          @if($continent->continent_hide == 1)
          <input type="checkbox" name="continent_hide" value="1" checked>
          @else
          <input type="checkbox" name="continent_hide" value="1">
          @endif
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>รูปภาพ</label>
          <input type="file" name="continent_img"><br>
          <img class="admin-img-edit" src="/assets/img/upload/continent/{{$continent->continent_img}}" alt="continent_img">
        </div>
        <input type="hidden" name="continent_id" value="{{$continent->_id}}">
        @csrf
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12admin-input">
          <button class="btn btn-warning form-control" type="submit" name="button">แก้ไขทวีป</button>
        </div>
      </form>
  </div>
</div>
@endsection
