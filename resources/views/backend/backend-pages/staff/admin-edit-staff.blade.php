@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>แก้ไขรายชื่อพนักงาน <i class="fas fa-user-alt"></i></h3>
@endsection

@section('content')
<div class="container">
  <div class="row">
      <form class="admin-form col-lg-6 col-md-6 col-sm-6" action="/admin/admin-edit-staff-process/{{$staff->_id}}" method="post" enctype="multipart/form-data">
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
          <input class="form-control" type="text" name="staff_name" placeholder="ชื่อ-นามสกุล" value="{{$staff->staff_name}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ชื่อเล่น</label>
          <input class="form-control" type="text" name="staff_nickname" placeholder="ชื่อเล่น" value="{{$staff->staff_nickname}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>เบอร์โทร</label>
          <input class="form-control" type="text" name="staff_tel" placeholder="เบอร์โทร" value="{{$staff->tel}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>อีเมลล์</label>
          <input class="form-control" type="text" name="staff_email" placeholder="อีเมลล์" value="{{$staff->staff_email}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>เฟสบุ๊ค</label>
          <input class="form-control" type="text" name="staff_facebook" placeholder="เฟสบุ๊ค" value="{{$staff->staff_facebook}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ไลน์</label>
          <input class="form-control" type="text" name="staff_line" placeholder="ไลน์" value="{{$staff->staff_line}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>สาขา</label>
          <select class="form-control" name="staff_branch">
            @foreach($branch as $all_branch)
            <option value="{{$all_branch->_id}}" @if($staff->staff_branch_id == $all_branch->_id) selected @endif>{{$all_branch->branch_name}}</option>
            @endforeach
          </select>
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ลำดับที่</label>
          <input class="form-control" type="number" name="staff_sort" placeholder="ลำดับที่" value="{{$staff->staff_sort}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ซ่อน</label>&nbsp
          @if($staff->staff_hide == null)
          <input type="checkbox" name="staff_hide" value="1">
          @else
          <input type="checkbox" name="staff_hide" value="1" checked>
          @endif
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>รูปภาพ</label>
          <input type="file" name="staff_img"><br>
          <img class="admin-img-edit" src="/assets/img/upload/staff/{{$staff->staff_img}}" alt="staff_img">
        </div>
        <input type="hidden" name="staff_id" value="{{$staff->_id}}">
        @csrf
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <button class="btn btn-warning form-control" type="submit" name="button">แก้ไขรายชื่อพนักงาน</button>
        </div>
      </form>
  </div>
</div>
@endsection
