@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>สร้างสายการบิน <i class="fas fa-plane"></i></h3>
@endsection

@section('content')
<div class="container">
  <div class="row">
      <form class="admin-form col-lg-6 col-md-6 col-sm-6" action="/admin/admin-create-airline-process" method="post" enctype="multipart/form-data">
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ชื่อสายการบิน</label>
          <input class="form-control" type="text" name="airline_name" placeholder="ชื่อสายการบิน">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ลำดับที่</label>
          <input class="form-control" type="number" name="airline_sort" placeholder="ลำดับที่">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ซ่อน</label>&nbsp
          <input type="checkbox" name="airline_hide" value="1">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>รูปภาพ</label>
          <input type="file" name="airline_img">
        </div>
        @csrf
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <button class="btn btn-success form-control" type="submit" name="button">สร้างสายการบิน</button>
        </div>
      </form>
  </div>
</div>
@endsection
