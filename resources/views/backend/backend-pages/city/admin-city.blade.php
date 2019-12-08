@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>หมวดหมู่เมือง <i class="fas fa-city"></i></h3>
@endsection

@section('content')
<a class="btn btn-success" href="/admin/admin-create-city">สร้างทวีป</a>
<hr>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 table-field">
      <table class="table table-bordered table-hover admin-table">
          <thead>
        <tr>
          <th>ลำดับที่</th>
          <th>รูปภาพ</th>
          <th>ชื่อประเทศ</th>
          <th>เรียง</th>
          <th>ซ่อน</th>
          <th>แก้ไข</th>
          <th>ลบ</th>
        </tr>
    </thead><tbody>
        @foreach($city as $show_city)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>
            <img class="admin-img-list" src="/assets/img/upload/city/{{$show_city->city_img}}" alt="city_img">
          </td>
          <td>{{$show_city->city_name}}</td>
          <td>{{$show_city->city_sort}}</td>
          <td>
            @if($show_city->city_hide == null)
              <i class="far fa-times-circle"></i>
            @else
              <i class="far fa-check-circle"></i>
            @endif
          </td>
          <td>
            <a class="btn btn-warning" href="/admin/admin-edit-city/{{$show_city->_id}}">แก้ไข</a>
          </td>
          <td>
            <form class="" action="/admin/admin-delete-city-process/{{$show_city->_id}}" method="post">
              <input type="hidden" name="city_id" value="{{$show_city->_id}}">
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
