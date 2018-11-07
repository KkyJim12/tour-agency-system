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
        <input type="hidden" name="banner_num" value="1">
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
        แบนเนอร์
    </div><hr>
    <div class="col-lg-12">
      <img class="second-banner-img" src="/assets/img/upload/banner/{{$second_banner->banner_img}}"><br>
    </div>
    <div class="col-lg-12">
      <form action="/admin/admin-banner-save" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label>350x279.47</label>
          <input type="file" name="banner_img">
        </div>
        <div class="form-group">
          <label>ลิงค์</label>
          <input class="form-control" type="text" name="banner_link" value="{{$second_banner->banner_link}}">
        </div>
        <input type="hidden" name="banner_num" value="2">
        <br>
        @csrf
        <button class="btn btn-success" type="submit" name="button">บันทึก</button>
      </form>
    </div>
  </div>
</div>

</br>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
        แบนเนอร์
    </div><hr>
    <div class="col-lg-12">
      <img class="second-banner-img" src="/assets/img/upload/banner/{{$third_banner->banner_img}}"><br>
    </div>
    <div class="col-lg-12">
      <form action="/admin/admin-banner-save" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label>350x279.47</label>
          <input type="file" name="banner_img">
        </div>
        <div class="form-group">
          <label>ลิงค์</label>
          <input class="form-control" type="text" name="banner_link" value="{{$third_banner->banner_link}}">
        </div>
        <input type="hidden" name="banner_num" value="3">
        <br>
        @csrf
        <button class="btn btn-success" type="submit" name="button">บันทึก</button>
      </form>
    </div>
  </div>
</div>

</br>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
        แบนเนอร์
    </div><hr>
    <div class="col-lg-12">
      <img class="couple-banner-img" src="/assets/img/upload/banner/{{$fourth_banner->banner_img}}"><br>
    </div>
    <div class="col-lg-12">
      <form action="/admin/admin-banner-save" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label>350x140</label>
          <input type="file" name="banner_img">
        </div>
        <div class="form-group">
          <label>ลิงค์</label>
          <input class="form-control" type="text" name="banner_link" value="{{$fourth_banner->banner_link}}">
        </div>
        <input type="hidden" name="banner_num" value="4">
        <br>
        @csrf
        <button class="btn btn-success" type="submit" name="button">บันทึก</button>
      </form>
    </div>
  </div>
</div>

<br>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
        แบนเนอร์
    </div><hr>
    <div class="col-lg-12">
      <img class="couple-banner-img" src="/assets/img/upload/banner/{{$fifth_banner->banner_img}}"><br>
    </div>
    <div class="col-lg-12">
      <form action="/admin/admin-banner-save" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label>350x140</label>
          <input type="file" name="banner_img">
        </div>
        <div class="form-group">
          <label>ลิงค์</label>
          <input class="form-control" type="text" name="banner_link" value="{{$fifth_banner->banner_link}}">
        </div>
        <input type="hidden" name="banner_num" value="5">
        <br>
        @csrf
        <button class="btn btn-success" type="submit" name="button">บันทึก</button>
      </form>
    </div>
  </div>
</div>

<br>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
        แบนเนอร์
    </div><hr>
    <div class="col-lg-12">
      <img class="big-banner-img" src="/assets/img/upload/banner/{{$sixth_banner->banner_img}}"><br>
    </div>
    <div class="col-lg-12">
      <form action="/admin/admin-banner-save" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label>730x500</label>
          <input type="file" name="banner_img">
        </div>
        <div class="form-group">
          <label>ลิงค์</label>
          <input class="form-control" type="text" name="banner_link" value="{{$sixth_banner->banner_link}}">
        </div>
        <input type="hidden" name="banner_num" value="6">
        <br>
        @csrf
        <button class="btn btn-success" type="submit" name="button">บันทึก</button>
      </form>
    </div>
  </div>
</div>
@endsection
