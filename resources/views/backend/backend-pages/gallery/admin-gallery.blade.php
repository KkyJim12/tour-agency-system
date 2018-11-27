@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>หมวดหมู่ประเทศ <i class="fas fa-image"></i></h3>
@endsection

@section('content')
@include('backend.backend-components.search-js')
<a class="btn btn-success" href="/admin/admin-create-gallery">สร้างภาพประทับใจ</a>
<div class="container">
  <div class="row">
    <div class="col-md-11 table-field">
      <table class="table table-bordered table-hover admin-table">
        <tr>
          <th>ลำดับที่</th>
          <th>รูปภาพ</th>
          <th>ประเทศ</th>
          <th>ชื่อประเทศ</th>
          <th>เรียง</th>
          <th>ซ่อน</th>
          <th>แนะนำ</th>
          <th>แก้ไข</th>
          <th>ลบ</th>
        </tr>
        @foreach($gallery as $show_gallery)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>
            <img class="admin-img-list" src="/assets/img/upload/gallery/img/{{$show_gallery->gallery_img}}" alt="gallery_img">
          </td>
          <td>{{$show_gallery->gallery_country_name}}</td>
          <td>{{$show_gallery->gallery_name}}</td>
          <td>{{$show_gallery->gallery_sort}}</td>
          <td>
            @if($show_gallery->gallery_hide == null)
              <i class="far fa-times-circle"></i>
            @else
              <i class="far fa-check-circle"></i>
            @endif
          </td>
          <td>
            @if($show_gallery->gallery_suggest == null)
              <i class="far fa-times-circle"></i>
            @else
              <i class="far fa-check-circle"></i>
            @endif
          </td>
          <td>
            <a class="btn btn-warning" href="/admin/admin-edit-gallery/{{$show_gallery->_id}}">แก้ไข</a>
          </td>
          <td>
            <form class="" action="/admin/admin-delete-gallery-process/{{$show_gallery->_id}}" method="post">
              <input type="hidden" name="gallery_id" value="{{$show_gallery->_id}}">
              @csrf
              <button class="btn btn-danger" type="submit" name="button" onclick="confirm('ยืนยันการลบ')">ลบ</button>
            </form>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection
