@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>สไลด์ <i class="fas fa-globe-asia"></i></h3>
@endsection

@section('content')
<a class="btn btn-success" href="/admin/admin-create-slide">สร้างสไลด์</a>
<hr>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 table-field">
      <table class="table table-bordered table-hover admin-table">
          <thead>
        <tr>
          <th>ลำดับที่</th>
          <th>รูปภาพ</th>
          <th>ลิงค์</th>
          <th>เรียง</th>
          <th>ซ่อน</th>
          <th>แก้ไข</th>
          <th>ลบ</th>
        </tr>
    </thead><tbody>
        @foreach($slide as $show_slide)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>
            <img class="admin-img-list" src="/assets/img/upload/slide/{{$show_slide->slide_img}}" alt="slide_img">
          </td>
          <td>{{$show_slide->slide_link}}</td>
          <td>{{$show_slide->slide_sort}}</td>
          <td>
            @if($show_slide->slide_hide == null)
              <i class="far fa-times-circle"></i>
            @else
              <i class="far fa-check-circle"></i>
            @endif
          </td>
          <td>
            <a class="btn btn-warning" href="/admin/admin-edit-slide/{{$show_slide->_id}}">แก้ไข</a>
          </td>
          <td>
            <form class="" action="/admin/admin-delete-slide-process/{{$show_slide->_id}}" method="post">
              <input type="hidden" name="slide_id" value="{{$show_slide->_id}}">
              @csrf
              <button class="btn btn-danger" type="submit" name="button" onclick="confirm('ยืนยันการลบ')">ลบ</button>
            </form>
          </td>
        </tr>
        @endforeach
    </tbody>
      </table>
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
    $('.table').DataTable();
} );
</script>
@endsection
