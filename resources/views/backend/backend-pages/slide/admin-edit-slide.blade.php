@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>แก้ไขสไลด์ <i class="fab fa-slideshare"></i></h3>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
      <form class="col-lg-6 col-md-6 col-sm-6 admin-form" action="/admin/admin-edit-slide-process/{{$slide->_id}}" method="post" enctype="multipart/form-data">
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
          <label>ลิงค์สไลด์</label>
          <input class="form-control" type="text" name="slide_link" placeholder="ลิงค์สไลด์" value="{{$slide->slide_link}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ลำดับที่</label>
          <input class="form-control" type="number" name="slide_sort" placeholder="ลำดับที่" value="{{$slide->slide_sort}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ซ่อน</label>&nbsp
          @if($slide->slide_hide == null)
          <input type="checkbox" name="slide_hide" value="1">
          @else
          <input type="checkbox" name="slide_hide" value="1" checked>
          @endif
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>รูปภาพ</label>
          <input type="file" name="slide_img">
        </div>
        @csrf
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <button class="btn btn-warning form-control" type="submit" name="button">แก้ไขสไลด์</button>
        </div>
      </form>
  </div>
</div>
@endsection
