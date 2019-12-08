@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>แก้ไขภาพประทับใจ <i class="fas fa-image"></i></h3>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
      <form class="col-lg-6 col-md-6 col-sm-6 admin-form" action="/admin/admin-edit-gallery-process" method="post" enctype="multipart/form-data">
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
          <label>ชื่อภาพประทับใจ</label>
          <input class="form-control" type="text" name="gallery_name" placeholder="ชื่อภาพประทับใจ" value="{{$gallery->gallery_name}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ลำดับที่</label>
          <input class="form-control" type="number" name="gallery_sort" placeholder="ลำดับที่" value="{{$gallery->gallery_sort}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>หมวดหมู่ภาพประทับใจ</label>
          <select class="form-control" name="country_id">
            <option>กรุณาเลือกประเทศ</option>
            @foreach($country as $all_country)
            <option value="{{$all_country->_id}}" @if($gallery->gallery_country_id == $all_country->_id) selected @endif>{{$all_country->country_name}}</option>
            @endforeach
          </select>
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ซ่อน</label>&nbsp
          @if($gallery->gallery_hide == null)
          <input type="checkbox" name="gallery_hide" value="1">
          @else
          <input type="checkbox" name="gallery_hide" value="1" checked>
          @endif
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>แนะนำ</label>&nbsp
          @if($gallery->gallery_suggest == null)
          <input type="checkbox" name="gallery_suggest" value="1">
          @else
          <input type="checkbox" name="gallery_suggest" value="1" checked>
          @endif
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>รูปภาพหลัก</label>
          <input type="file" name="gallery_img">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>รูปภาพอื่นๆ</label>
          <input type="file" name="gallery_other_img[]" multiple>
        </div>
        <input type="hidden" name="gallery_id" value="{{$gallery->_id}}">
        @csrf
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <button class="btn btn-warning form-control" type="submit" name="button">แก้ไขภาพประทับใจ</button>
        </div>
      </form>
  </div>
</div>
@endsection
