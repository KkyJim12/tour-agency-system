@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>สร้างรายชื่อพนักงาน <i class="fas fa-user-alt"></i></h3>
@endsection

@section('content')
<div class="container">
  <div class="row">
      <form class="admin-form col-lg-6 col-md-6 col-sm-6" action="/admin/admin-create-staff-process" method="post" enctype="multipart/form-data">
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
          <label>ชื่อนามสกุล</label>
          <input class="form-control" type="text" name="staff_name" placeholder="ชื่อ-นามสกุล">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ชื่อเล่น</label>
          <input class="form-control" type="text" name="staff_nickname" placeholder="ชื่อเล่น">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>เบอร์โทร</label>
          <input class="form-control" type="text" name="staff_tel" placeholder="เบอร์โทร">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>อีเมลล์</label>
          <input class="form-control" type="text" name="staff_email" placeholder="อีเมลล์">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>เฟสบุ๊ค</label>
          <input class="form-control" type="text" name="staff_facebook" placeholder="เฟสบุ๊ค">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ไลน์</label>
          <input class="form-control" type="text" name="staff_line" placeholder="ไลน์">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>สาขา</label>
          <select class="form-control" name="staff_branch">
            @foreach($branch as $all_branch)
            <option value="{{$all_branch->_id}}">{{$all_branch->branch_name}}</option>
            @endforeach
          </select>
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ลำดับที่</label>
          <input class="form-control" type="number" name="staff_sort" placeholder="ลำดับที่">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ซ่อน</label>&nbsp
          <input type="checkbox" name="staff_hide" value="1">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>รูปภาพ</label>
          <input type="file" name="staff_img">
        </div>
        @csrf
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <button class="btn btn-success form-control" type="submit" name="button">สร้างรายชื่อพนักงาน</button>
        </div>
      </form>
  </div>
</div>
@endsection
