@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>ข้อมูลการจองทัวร์ <i class="fas fa-envelope"></i></h3>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 table-field">
      <table class="table table-bordered table-hover admin-table">
          <thead>
        <tr>
          <th>ลำดับที่</th>
          <th>ชื่อ-นามสกุล</th>
          <th>จำนวน</th>
          <th>เบอร์โทร</th>
          <th>รายละเอียด</th>
        </tr>
    </thead><tbody>
        @foreach($reserve as $reserve_tour)
          <tr>
            <th>{{$loop->iteration}}</th>
            <th>{{$reserve_tour->reserve_name}}</th>
            <th>{{$reserve_tour->reserve_qty}}</th>
            <th>{{$reserve_tour->reserve_tel}}</th>
            <th>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{$reserve_tour->_id}}">รายละเอียด</button>
              <div id="{{$reserve_tour->_id}}" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <h3>{{$reserve_tour->reserve_tour_name}}</h3>
                    <h5>{{$reserve_tour->reserve_tour_start_date}} ถึง {{$reserve_tour->reserve_tour_end_date}}</h5>
                    {{$reserve_tour->reserve_info}}
                  </div>
                </div>
              </div>
            </th>
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
} );
</script>
@endsection
