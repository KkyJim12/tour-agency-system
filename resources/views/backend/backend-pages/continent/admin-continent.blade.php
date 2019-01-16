@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>หมวดหมู่ทวีป <i class="fas fa-globe-asia"></i></h3>
@endsection

@section('content')
<a class="btn btn-success" href="/admin/admin-create-continent">สร้างทวีป</a>
<div class="container">
  <div class="row">
    <div class="col-md-11 table-field">
      <table class="table table-bordered table-hover admin-table">
          <thead>
        <tr>
          <th>ลำดับที่</th>
          <th>รูปภาพ</th>
          <th>ชื่อทวีป</th>
          <th>เรียง</th>
          <th>ซ่อน</th>
          <th>แก้ไข</th>
          <th>ลบ</th>
        </tr>
    </thead><tbody>
        @foreach($continent as $show_continent)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>
            <img class="admin-img-list" src="/assets/img/upload/continent/{{$show_continent->continent_img}}" alt="continent_img">
          </td>
          <td>{{$show_continent->continent_name}}</td>
          <td>{{$show_continent->continent_sort}}</td>
          <td>
            @if($show_continent->continent_hide == null)
              <i class="far fa-times-circle"></i>
            @else
              <i class="far fa-check-circle"></i>
            @endif
          </td>
          <td>
            <a class="btn btn-warning" href="/admin/admin-edit-continent/{{$show_continent->_id}}">แก้ไข</a>
          </td>
          <td>
            <form class="" action="/admin/admin-delete-continent-process/{{$show_continent->_id}}" method="post">
              <input type="hidden" name="continent_id" value="{{$show_continent->_id}}">
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
