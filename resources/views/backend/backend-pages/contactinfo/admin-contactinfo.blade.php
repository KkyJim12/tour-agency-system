@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>หมวดหมู่ทวีป <i class="fab fa-telegram-plane"></i></h3>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-11 table-field">
      <table class="table table-bordered table-hover admin-table">
        <tr>
          <th>ลำดับที่</th>
          <th>ชื่อ-นามสกุล</th>
          <th>อีเมลล์</th>
          <th>เบอร์โทร</th>
          <th>รายละเอียด</th>
        </tr>
        @foreach($contactinfo as $show_contactinfo)
          <tr>
            <th>{{$loop->iteration}}</th>
            <th>{{$show_contactinfo->contact_name}}</th>
            <th>{{$show_contactinfo->contact_email}}</th>
            <th>{{$show_contactinfo->contact_tel}}</th>
            <th>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">รายละเอียด</button>
              <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    {{$show_contactinfo->contact_info}}
                  </div>
                </div>
              </div>
            </th>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection
