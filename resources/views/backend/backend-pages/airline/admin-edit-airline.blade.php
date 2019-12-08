@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>แก้ไขสายการบิน <i class="fas fa-plane"></i></h3>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
      <form class="admin-form col-lg-6 col-md-6 col-sm-6" action="/admin/admin-edit-airline-process/{{$airline->_id}}" method="post" enctype="multipart/form-data">
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
          <label>ชื่อสายการบิน</label>
          <input class="form-control" type="text" name="airline_name" placeholder="ชื่อสายการบิน" value="{{$airline->airline_name}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ลำดับที่</label>
          <input class="form-control" type="number" name="airline_sort" placeholder="ลำดับที่" value="{{$airline->airline_sort}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ซ่อน</label>&nbsp
          <input type="checkbox" name="airline_hide" value="1" value="{{$airline->airline_hide}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>รูปภาพ</label>
          <input type="file" name="airline_img">
          <img class="admin-img-edit" src="/assets/img/upload/airline/{{$airline->airline_img}}" alt="airline_ime">
        </div>
        <input type="hidden" name="airline_id" value="{{$airline->_id}}">
        @csrf
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <button class="btn btn-warning form-control" type="submit" name="button">แก้ไขสายการบิน</button>
        </div>
      </form>
  </div>
</div>
@endsection
