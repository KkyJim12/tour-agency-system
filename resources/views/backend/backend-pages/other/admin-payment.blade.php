@extends('backend.backend-layouts.admin-master')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <form  action="/admin-save-payment-page" method="post">
        <div class="panel-body">
        <textarea rows="20"  name="content">{{$content->content}}</textarea>
        </div>
        @csrf
        <button class="btn btn-success form-control" type="submit" name="button">บันทึกเนื้อหา</button>
      </form>
    </div>
  </div>
</div>
@endsection
