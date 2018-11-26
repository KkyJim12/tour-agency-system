@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>บทความ <i class="fas fa-book"></i></h3>
@endsection

@section('content')
<a class="btn btn-success" href="/admin/admin-create-article">สร้างบทความ</a>
<div class="container">
  <div class="row">
    <div class="col-md-11 table-field">
      <table class="table table-bordered table-hover admin-table">
        <tr>
          <th>ลำดับที่</th>
          <th>รูปภาพ</th>
          <th>ชื่อ่บทความ</th>
          <th>เรียง</th>
          <th>ซ่อน</th>
          <th>แก้ไข</th>
          <th>ลบ</th>
        </tr>
        @foreach($article as $show_article)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>
            <img class="admin-img-list" src="/assets/img/upload/article/{{$show_article->article_img}}" alt="article_img">
          </td>
          <td>{{$show_article->article_title}}</td>
          <td>{{$show_article->article_sort}}</td>
          <td>
            @if($show_article->article_hide == null)
              <i class="far fa-times-circle"></i>
            @else
              <i class="far fa-check-circle"></i>
            @endif
          </td>
          <td>
            <a class="btn btn-warning" href="/admin/admin-edit-article/{{$show_article->_id}}">แก้ไข</a>
          </td>
          <td>
            <form class="" action="/admin/admin-delete-article-process/{{$show_article->_id}}" method="post">
              <input type="hidden" name="article_id" value="{{$show_article->_id}}">
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
