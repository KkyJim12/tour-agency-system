@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>หมวดหมู่ประเทศ <i class="fas fa-flag"></i></h3>
@endsection

@section('content')
@include('backend.backend-components.search-js')
<a class="btn btn-success" href="/admin/admin-create-country">สร้างประเทศ</a>
<div class="container">
  <div class="row">
    <div class="col-md-11 table-field">
      <table class="table table-bordered table-hover admin-table">
          <thead>
        <tr>
          <th>ลำดับที่</th>
          <th>รูปภาพ</th>
          <th>ทวีป</th>
          <th>ชื่อประเทศ</th>
          <th>เรียง</th>
          <th>ซ่อน</th>
          <th>แก้ไข</th>
          <th>ลบ</th>
        </tr>
    </thead><tbody>
        @foreach($country as $show_country)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>
            <img class="admin-img-list" src="/assets/img/upload/country/{{$show_country->country_img}}" alt="country_img">
          </td>
          <td>{{$show_country->continent_name}}</td>
          <td>{{$show_country->country_name}}</td>
          <td>{{$show_country->country_sort}}</td>
          <td>
            @if($show_country->country_hide == null)
              <i class="far fa-times-circle"></i>
            @else
              <i class="far fa-check-circle"></i>
            @endif
          </td>
          <td>
            <a class="btn btn-warning" href="/admin/admin-edit-country/{{$show_country->_id}}">แก้ไข</a>
          </td>
          <td>
            <form class="" action="/admin/admin-delete-country-process/{{$show_country->_id}}" method="post">
              <input type="hidden" name="country_id" value="{{$show_country->_id}}">
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
