@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>สร้างหมวดหมู่ทวีป</h3>
@endsection

@section('content')
<div class="container">
  <div class="row">
      <form action="/admin/admin-create-continent-process" method="post" enctype="multipart/form-data">
        <div class="input-group col-md-12">
          <label>ชื่อทวีป</label>
          <input class="form-control col-md-12" type="text" name="continent_name" placeholder="ชื่อทวีป">
        </div>
        <div class="input-group col-md-3">
          <label>ลำดับที่</label>
          <input class="form-control col-md-3" type="number" name="continent_sort" placeholder="ลำดับที่">
        </div>
        <div class="input-group col-md-6">
          <label>ซ่อน</label>&nbsp
          <input type="checkbox" name="continent_hide" value="1">
        </div>
        <div class="input-group col-md-6">
          <label>รูปภาพ</label>
          <input type="file" name="continent_img">
        </div>
        @csrf
        <div class="input-group col-md-12">
          <button class="btn btn-success form-control" type="submit" name="button">สร้างทวีป</button>
        </div>
      </form>
  </div>
</div>
@endsection
