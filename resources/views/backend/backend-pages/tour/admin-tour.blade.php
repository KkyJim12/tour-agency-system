@extends('backend.backend-layouts.admin-master')
@section('content-header')
<h3>ทัวร์ <i class="fas fa-map-marked-alt"></i></h3>
@endsection
@section('content')
<a class="btn btn-success" href="/admin/admin-create-tour">สร้างทัวร์</a>
<div class="container">
   <div class="row">
      <div class="col-md-11 table-field">
         <table class="table table-bordered table-hover admin-table">
            <thead><tr>
               <th>ลำดับที่</th>
               <th>รูปภาพ</th>
               <th>ชื่อทัวร์</th>
               <th>ประเทศ</th>
               <th>พนักงาน</th>
               <th>สายการบิน</th>
               <th>วันเดินทาง</th>
               <th>วันกลับ</th>
               <th>วัน/คืน</th>
               <th>เรียง</th>
               <th>แนะนำ</th>
               <th>ซ่อน</th>
               <th>แก้ไข</th>
               <th>ลบ</th>
           </tr></thead><tbody>
            @foreach($tour as $show_tour)
            <tr>
               <td>{{$loop->iteration}}</td>
               <td>
                  <img class="admin-img-list" src="/assets/img/upload/tour/img/{{$show_tour->tour_img}}" alt="tour_img">
               </td>
               <td>{{$show_tour->tour_name}}</td>
               <td>{{$show_tour->tour_country_name}}</td>
               <td>{{$show_tour->tour_staff_name}}</td>
               <td>{{$show_tour->tour_airline_name}}</td>
               <td>{{$show_tour->tour_start_date}}</td>
               <td>{{$show_tour->tour_end_date}}</td>
               <td>{{$show_tour->tour_day}} วัน {{$show_tour->tour_night}} คืน</td>
               <td>{{$show_tour->tour_sort}}</td>
               <td>
                  @if($show_tour->tour_suggest == null)
                  <i class="far fa-times-circle"></i>
                  @else
                  <i class="far fa-check-circle"></i>
                  @endif
               </td>
               <td>
                  @if($show_tour->tour_hide == null)
                  <i class="far fa-times-circle"></i>
                  @else
                  <i class="far fa-check-circle"></i>
                  @endif
               </td>
               <td>
                  <a class="btn btn-warning" href="/admin/admin-edit-tour/{{$show_tour->_id}}">แก้ไข</a>
               </td>
               <td>
                  <form class="" action="/admin/admin-delete-tour-process/{{$show_tour->_id}}" method="post">
                     <input type="hidden" name="tour_id" value="{{$show_tour->_id}}">
                     @csrf
                     <button class="btn btn-danger" type="submit" name="button" onclick="confirm('ยืนยันการลบ')">ลบ</button>
                  </form>
               </td>
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
