@extends('backend.backend-layouts.admin-master')
@section('content-header')
<h3>เพิ่มไฟล์ PDF และ รูปภาพ <i class="fas fa-map-marked-alt"></i></h3>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <form class="admin-form" action="/admin/admin-add-tour-step-3/{{$tour_id}}" method="post" enctype="multipart/form-data">
                <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
                    <label>ไฟล์ PDF</label>
                    <input class="form-control" type="file" name="tour_pdf">
                </div>
                <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
                    <label>รูปหลัก</label>
                    <input class="form-control" type="file" name="tour_img">
                </div>
                <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
                    <label>รูปเพิ่มเติม</label>
                    <input class="form-control" type="file" name="tour_other_img[]" multiple>
                </div>
                @csrf
                <button type="submit" class="btn btn-primary form-control">ต่อไป</button>
            </form>
        </div>
    </div>
</div>
@endsection