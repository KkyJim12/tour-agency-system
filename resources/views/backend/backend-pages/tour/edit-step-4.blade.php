@extends('backend.backend-layouts.admin-master')
@section('content-header')
<h3>ตั่งค่า SEO <i class="fas fa-map-marked-alt"></i></h3>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <form class="admin-form" action="/admin/admin-edit-tour-step-4/{{$tour->_id}}" method="post" enctype="multipart/form-data">
                <!-- Seo Support -->
                <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
                    <label>Title (SEO)</label>
                    <input class="form-control" type="text" name="tour_seo_title" placeholder="title ของเว็บ" value="{{$tour->tour_seo_title}}">
                </div>
                <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
                    <label>meta tag (SEO)</label>
                    <input class="form-control" type="text" name="tour_seo_meta" placeholder="คำอธิบายเว็บ เวลา search google" value="{{$tour->tour_seo_meta}}">
                </div>
                <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 admin-input">
                    <label>url (SEO)</label>
                    <input class="form-control" type="text" name="tour_seo_url" placeholder="url ต่อท้าย" value="{{$tour->tour_seo_url}}">
                </div>
                <!-- End Seo Support -->
                @csrf
                <button type="submit" class="btn btn-primary form-control">สำเร็จ</button>
            </form>
        </div>
    </div>
</div>
@endsection