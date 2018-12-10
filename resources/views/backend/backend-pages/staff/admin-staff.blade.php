@extends('backend.backend-layouts.admin-master')
@section('content-header')
<h3>พนักงาน <i class="fas fa-user-alt"></i></h3>
@endsection
@section('content')
<a class="btn btn-success" href="/admin/admin-create-staff">สร้างรายชื่อพนักงาน</a>
<div class="container">
   <div class="row">
      <div class="col-md-11 table-field">
         <table class="table table-bordered table-hover admin-table">
            <tr>
               <th>ลำดับที่</th>
               <th>รูปภาพ</th>
               <th>ชื่อ-นามสกุล</th>
               <th>ชื่อเล่น</th>
               <th>เบอร์โทร</th>
               <th>อีเมลล์</th>
               <th>เฟสบุ๊ค</th>
               <th>ไลน์</th>
               <th>เรียง</th>
               <th>ซ่อน</th>
               <th>แก้ไข</th>
               <th>ลบ</th>
            </tr>
            @foreach($staff as $show_staff)
            <tr>
               <td>{{$loop->iteration}}</td>
               <td>
                  <img class="admin-img-list" src="/assets/img/upload/staff/{{$show_staff->staff_img}}" alt="staff_img">
               </td>
               <td>{{$show_staff->staff_name}}</td>
               <td>{{$show_staff->staff_nickname}}</td>
               <td>{{$show_staff->staff_tel}}</td>
               <td>{{$show_staff->staff_email}}</td>
               <td>{{$show_staff->staff_facebook}}</td>
               <td>{{$show_staff->staff_line}}</td>
               <td>{{$show_staff->staff_sort}}</td>
               <td>
                  @if($show_staff->staff_hide == null)
                  <i class="far fa-times-circle"></i>
                  @else
                  <i class="far fa-check-circle"></i>
                  @endif
               </td>
               <td>
                  <a class="btn btn-warning" href="/admin/admin-edit-staff/{{$show_staff->_id}}">แก้ไข</a>
               </td>
               <td>
                  <form class="" action="/admin/admin-delete-staff-process/{{$show_staff->_id}}" method="post">
                     <input type="hidden" name="staff_id" value="{{$show_staff->_id}}">
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
