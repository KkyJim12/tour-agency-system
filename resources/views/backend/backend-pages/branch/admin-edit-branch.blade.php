@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>แก้ไขสาขา <i class="fas fa-globe-asia"></i></h3>
@endsection

@section('content')
<div class="container">
  <div class="row">
      <form class="admin-form col-lg-6 col-md-6 col-sm-6" action="/admin/admin-edit-branch-process/{{$branch->_id}}" method="post" enctype="multipart/form-data">
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
          <label>ชื่อสาขา</label>
          <input class="form-control" type="text" name="branch_name" placeholder="ชื่อสาขา" value="{{$branch->branch_name}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ลำดับที่</label>
          <input class="form-control" type="number" name="branch_sort" placeholder="ลำดับที่" value="{{$branch->branch_sort}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ซ่อน</label>&nbsp
          <input type="checkbox" name="branch_hide" value="1" value="{{$branch->branch_hide}}">
        </div>
        @csrf
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <button class="btn btn-warning form-control" type="submit" name="button">แก้ไขสาขา</button>
        </div>
      </form>
  </div>
</div>
@endsection
