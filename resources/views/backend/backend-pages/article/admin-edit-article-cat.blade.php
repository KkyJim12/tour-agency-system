@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>แก้ไขหมวดหมู่บทความ <i class="fas fa-book"></i></h3>
@endsection

@section('content')
<div class="container">
  <div class="row">
      <form class="admin-form col-lg-6 col-md-6 col-sm-6" action="/admin/admin-edit-articlecat-process/{{$article_cat->_id}}" method="post" enctype="multipart/form-data">
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
          <label>ชื่อหมวดหมู่บทความ</label>
          <input class="form-control" type="text" name="articlecat_name" placeholder="ชื่อหมวดหมู่บทความ" value="{{$article_cat->article_cat_name}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ลำดับที่</label>
          <input class="form-control" type="number" name="articlecat_sort" placeholder="ลำดับที่" value="{{$article_cat->article_cat_sort}}">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ซ่อน</label>&nbsp
          @if($article_cat->article_cat_hide == null)
          <input type="checkbox" name="articlecat_hide" value="1">
          @else
          <input type="checkbox" name="articlecat_hide" value="1" checked>
          @endif
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>รูปภาพ</label>
          <input type="file" name="articlecat_img">
        </div>
        <input type="hidden" name="articlecat_id" value="{{$article_cat->_id}}">
        @csrf
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <button class="btn btn-warning form-control" type="submit" name="button">แก้ไขหมวดหมู่บทความ</button>
        </div>
      </form>
  </div>
</div>
@endsection
