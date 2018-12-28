@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>วันหยุดพิเศษ <i class="fas fa-calendar-alt"></i></h3>
@endsection

@section('content')
@include('backend.backend-components.search-js')
<a class="btn btn-success" href="/admin/admin-create-holiday">สร้างวันหยุดพิเศษ</a>
<div class="container">
  <div class="row">
    <div class="col-md-11 table-field">
      <table class="table table-bordered table-hover admin-table">
          <thead>
        <tr>
          <th>ลำดับที่</th>
          <th>รูปภาพ</th>
          <th>ชื่อวันหยุดพิเศษ</th>
          <th>เรียง</th>
          <th>ซ่อน</th>
          <th>แก้ไข</th>
          <th>ลบ</th>
        </tr>
    </thead><tbody>
        @foreach($holiday as $show_holiday)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>
            <img class="admin-img-list" src="/assets/img/upload/holiday/{{$show_holiday->holiday_img}}" alt="holiday_img">
          </td>
          <td>{{$show_holiday->holiday_name}}</td>
          <td>{{$show_holiday->holiday_sort}}</td>
          <td>
            @if($show_holiday->holiday_hide == null)
              <i class="far fa-times-circle"></i>
            @else
              <i class="far fa-check-circle"></i>
            @endif
          </td>
          <td>
            <a class="btn btn-warning" href="/admin/admin-edit-holiday/{{$show_holiday->_id}}">แก้ไข</a>
          </td>
          <td>
            <form class="" action="/admin/admin-delete-holiday-process/{{$show_holiday->_id}}" method="post">
              <input type="hidden" name="holiday_id" value="{{$show_holiday->_id}}">
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
