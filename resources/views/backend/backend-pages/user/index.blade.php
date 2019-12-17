@extends('backend.backend-layouts.admin-master')
@section('content-header')
<h3>ผู้ใช้งาน <i class="fas fa-user-alt"></i></h3>
@endsection
@section('content')
<a class="btn btn-success" href="/admin/admin-create-user">สร้างผู้ใช้งาน</a>
<hr>
@if(session('msg'))
   <div class="alert alert-danger">{{session('msg')}}</div>
@endif
<div class="container-fluid">
   <div class="row">
      <div class="col-md-12 table-field">
         <table class="table table-bordered table-hover admin-table">
            <thead>
               <tr>
                  <th>ลำดับที่</th>
                  <th>อีเมลล์</th>
                  <th>ตำแหน่ง</th>
                  <th>ลบ</th>
               </tr>
            </thead>
            <tbody>
               @foreach($user as $show_user)
               <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$show_user->email}}</td>
                  @foreach($show_user->getRoleNames() as $show_role)
                  <td>{{$show_role}}</td>
                  @endforeach
                  <td>
                     <form class="" action="/admin/admin-destroy-user" method="post">
                        <input type="hidden" name="user_id" value="{{$show_user->_id}}">
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
   });
</script>
@endsection