@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>สายการบิน <i class="fas fa-plane"></i></h3>
@endsection

@section('content')
<a class="btn btn-success" href="/admin/admin-create-airline">สร้างสายการบิน</a>
<div class="container">
  <div class="row">
    <div class="col-md-11 table-field">
      <table class="table table-bordered table-hover admin-table">
        <tr>
          <th>ลำดับที่</th>
          <th>รูปภาพ</th>
          <th>ชื่อทวีป</th>
          <th>เรียง</th>
          <th>ซ่อน</th>
          <th>แก้ไข</th>
          <th>ลบ</th>
        </tr>
        @foreach($airline as $show_airline)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>
            <img class="admin-img-list" src="/assets/img/upload/airline/{{$show_airline->airline_img}}" alt="airline_img">
          </td>
          <td>{{$show_airline->airline_name}}</td>
          <td>{{$show_airline->airline_sort}}</td>
          <td>
            @if($show_airline->airline_hide == null)
              <i class="far fa-times-circle"></i>
            @else
              <i class="far fa-check-circle"></i>
            @endif
          </td>
          <td>
            <a class="btn btn-warning" href="/admin/admin-edit-airline/{{$show_airline->_id}}">แก้ไข</a>
          </td>
          <td>
            <form class="" action="/admin/admin-delete-airline-process/{{$show_airline->_id}}" method="post">
              <input type="hidden" name="airline_id" value="{{$show_airline->_id}}">
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
