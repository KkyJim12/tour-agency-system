@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>หมวดหมู่บทความ <i class="fas fa-book"></i></h3>
@endsection

@section('content')
<a class="btn btn-success" href="/admin/admin-create-article-cat">สร้างหมวดหมู่บทความ</a>
<div class="container">
  <div class="row">
    <div class="col-md-11 table-field">
      <table class="table table-bordered table-hover admin-table">
        <tr>
          <th>ลำดับที่</th>
          <th>รูปภาพ</th>
          <th>ชื่อหมวดหมู่บทความ</th>
          <th>เรียง</th>
          <th>ซ่อน</th>
          <th>แก้ไข</th>
          <th>ลบ</th>
        </tr>
        @foreach($article_cat as $show_article_cat)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>
            <img class="admin-img-list" src="/assets/img/upload/article/category/{{$show_article_cat->article_cat_img}}" alt="article_cat_img">
          </td>
          <td>{{$show_article_cat->article_cat_name}}</td>
          <td>{{$show_article_cat->article_cat_sort}}</td>
          <td>
            @if($show_article_cat->article_cat_hide == null)
              <i class="far fa-times-circle"></i>
            @else
              <i class="far fa-check-circle"></i>
            @endif
          </td>
          <td>
            <a class="btn btn-warning" href="/admin/admin-edit-article-cat/{{$show_article_cat->_id}}">แก้ไข</a>
          </td>
          <td>
            <form class="" action="/admin/admin-delete-article-cat-process/{{$show_article_cat->_id}}" method="post">
              <input type="hidden" name="article_cat_id" value="{{$show_article_cat->_id}}">
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
