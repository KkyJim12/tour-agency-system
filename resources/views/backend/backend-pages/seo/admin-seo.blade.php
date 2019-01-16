@extends('backend.backend-layouts.admin-master')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3>ตั้งค่า SEO <i class="fas fa-cog"></i></h3>
      <form action="/admin/admin-seo-process" method="post">
        <label>title</label>
        <input class="form-control" type="text" name="home_seo_title" value="@if($seo){{$seo->home_seo_title}}@endif" placeholder="title หน้าเว็บ">
        <label>meta</label>
        <input class="form-control" type="text" name="home_seo_meta" value="@if($seo){{$seo->home_seo_meta}}@endif" placeholder="meta หน้าเว็บ"><br>
        @csrf
        <button class="btn btn-success form-control" type="submit" name="button">บันทึก</button>
      </form>
    </div>
  </div>
</div>
@endsection
