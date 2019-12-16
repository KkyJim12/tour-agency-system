@extends('backend.backend-layouts.admin-master')
@section('content-header')
<h3>สร้างผู้ใช้งาน <i class="fas fa-user"></i></h3>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 table-field">
            <form method="post" action="/admin/admin-store-user">
                <div class="form-group">
                    <label>อีเมลล์</label>
                    <input type="email" class="form-control" placeholder="กรุณากรอกอีเมลล์" name="email">
                </div>
                <div class="form-group">
                    <label>พาสเวิร์ด</label>
                    <input type="password" class="form-control" placeholder="กรุณากรอกพาสเวิร์ด" name="password">
                </div>
                <div class="form-group">
                    <label>ตำแหน่ง</label>
                    <select class="form-control" name="role">
                        <option value="">กรุณาเลือกตำแหน่ง</option>
                        @foreach($role as $show_role)
                        <option value="{{$show_role->name}}">{{$show_role->name}}</option>
                        @endforeach
                    </select>
                </div>
                @csrf
                <button type="submit" class="form-control btn btn-success">สร้างผู้ใช้งาน</button>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.table').DataTable();
    });
</script>
@endsection