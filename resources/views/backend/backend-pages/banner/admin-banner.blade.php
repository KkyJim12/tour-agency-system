@extends('backend.backend-layouts.admin-master')

@section('content')
<div class="container">
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
    <div class="col-lg-12">
        แบนเนอร์ Navbar
    </div><hr>
    <div class="col-lg-12">
      <img class="nav-banner-img" src="/assets/img/upload/banner/{{$nav_banner->banner_img}}"><br>
    </div>
    <div class="col-lg-12">
      <form action="/admin/admin-banner-save" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label>728x90</label>
          <input type="file" name="banner_img">
        </div>
        <div class="form-group">
          <label>ลิงค์</label>
          <input class="form-control" type="text" name="banner_link" value="{{$nav_banner->banner_link}}">
        </div>
        <br>
        @csrf
        <button class="btn btn-success" type="submit" name="button">บันทึก</button>
      </form>
    </div>
  </div>
</div>

ิ</br>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
        แบนเนอร์ 3 อันล่าง
    </div><hr>
    <div class="col-lg-12">
      <img class="nav-banner-img" src="/assets/img/upload/banner/{{$nav_banner->banner_img}}"><br>
    </div>
    <div class="col-lg-12">
      <form action="/admin/admin-three-banner-save" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label>350x279.47</label>
          <input type="file" name="banner_img">
        </div>
        <div class="form-group">
          <label>ลิงค์</label>
          <input class="form-control" type="text" name="banner_link" value="{{$nav_banner->banner_link}}">
        </div>
        <br>
        @csrf
        <button class="btn btn-success" type="submit" name="button">บันทึก</button>
      </form>
    </div>
  </div>
</div>
@endsection
