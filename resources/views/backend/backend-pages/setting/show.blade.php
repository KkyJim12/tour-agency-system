@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>ตั้งค่าเว็บไซต์ <i class="fas fa-cog"></i></h3>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="col-md-12">
            <form class="admin-form" method="post" action="/admin/admin-edit-setting-1" enctype="multipart/form-data">
                <div class="form-group">
                    <label>เบอร์โทรศัพท์ หลัก</label>
                    <input type="text" class="form-control" placeholder="กรุณากรอกเบอร์โทร" value="{{$main_tel->content}}" name="main_tel">
                </div>
                <div class="form-group">
                    <label>Line หลัก</label>
                    <input type="text" class="form-control" placeholder="กรุณากรอก Line" value="{{$main_line->content}}" name="main_line">
                </div>
                <div class="form-group">
                    <label>Facebook หลัก</label>
                    <input type="text" class="form-control" placeholder="กรุณากรอก Facebook" value="{{$main_facebook->content}}" name="main_facebook">
                </div>
                @csrf
                <button type="submit" class="btn btn-success form-control">บันทึก</button>
            </form>
        </div>
        <div class="col-md-12" style="margin-top:20px;">
            <form class="admin-form" method="post" action="/admin/admin-edit-setting-2" enctype="multipart/form-data">
                <div class="form-group">
                    <label>แบนเนอร์หน้าค้นหาทัวร์</label>
                    <input type="file" class="form-control" name="background_search">
                </div>
                <div class="form-group">
                    <label>แบนเนอร์หน้าข้อมูลทัวร์</label>
                    <input type="file" class="form-control" name="background_tour">
                </div>
                <div class="form-group">
                    <label>แบนเนอร์หน้าบทความ</label>
                    <input type="file" class="form-control" name="background_article">
                </div>
                <div class="form-group">
                    <label>แบนเนอร์หน้าภาพประทับใจ</label>
                    <input type="file" class="form-control" name="background_gallery">
                </div>
                <div class="form-group">
                    <label>รูป Line มุมขวาล่าง</label>
                    <input type="file" class="form-control" name="image_line">
                </div>
                @csrf
                <button type="submit" class="btn btn-success form-control">บันทึก</button>
            </form>
        </div>
    </div>
</div>
@endsection