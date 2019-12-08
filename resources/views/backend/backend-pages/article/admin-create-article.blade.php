@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>สร้สร้างบทความ <i class="fas fa-book"></i></h3>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
      <form class="admin-form col-lg-6 col-md-6 col-sm-6" action="/admin/admin-create-article-process" method="post" enctype="multipart/form-data">
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
          <label>ชื่อบทความ</label>
          <input class="form-control" type="text" name="article_title" placeholder="ชื่อบทความ">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>หมวดหมู่บทความ</label>
          <select class="form-control" name="article_cat">
            <option>กรุณาเลือกหมวดหมู่บทความ</option>
            @foreach($all_article_cat as $show_all_article_cat)
              <option value="{{$show_all_article_cat->_id}}">{{$show_all_article_cat->article_cat_name}}</option>
            @endforeach
          </select>
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>เนื้อหา</label>
          <textarea class="mcetext" name="article_content"></textarea>
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ลำดับที่</label>
          <input class="form-control" type="number" name="article_sort" placeholder="ลำดับที่">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>ซ่อน</label>&nbsp
          <input type="checkbox" name="articlecat_hide" value="1">
        </div>
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <label>รูปภาพ</label>
          <input type="file" name="article_img">
        </div>
        @csrf
        <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
          <button class="btn btn-success form-control" type="submit" name="button">สร้างบทความ</button>
        </div>
      </form>
  </div>
</div>
@endsection
