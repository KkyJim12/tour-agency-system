@extends('backend.backend-layouts.admin-master')
@section('content-header')
<h3>ทัวร์ <i class="fas fa-map-marked-alt"></i></h3>
@endsection
@section('content')
<a class="btn btn-success" href="/admin/admin-create-tour">สร้างทัวร์</a>
<hr>
<div class="container-fluid">
   <div class="row">
      @foreach($country as $show_country)
      <div class="col-md-1 navCountryMain">
         <a class="navCountry" href="/admin/admin-tour/{{$show_country->_id}}">
            <img class="imgCountry" src="/assets/img/upload/country/{{$show_country->country_img}}">
            <span>{{str_limit($show_country->country_name,5)}}</span>
         </a>
      </div>
      @endforeach
   </div>
   <div class="row">
      <div class="col-md-12 table-field">
         <table class="table table-bordered table-hover admin-table">
            <thead>
               <tr>
                  <th>ลำดับที่</th>
                  <th>รูปภาพ</th>
                  <th>ชื่อทัวร์</th>
                  <th>ประเทศ</th>
                  <th>สายการบิน</th>
                  <th>เรียง</th>
                  <th>แนะนำ</th>
                  <th>แก้ไข</th>
                  <th>ลบ</th>
               </tr>
            </thead>
            <tbody>
               @foreach($tour as $show_tour)
               <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>
                     <img class="admin-img-list" src="/assets/img/upload/tour/img/{{$show_tour->tour_img}}" alt="tour_img">
                  </td>
                  <td>{{$show_tour->tour_name}}</td>
                  <td>{{$show_tour->tour_country_name}}</td>
                  <td>{{$show_tour->tour_airline_name}}</td>
                  <td>{{$show_tour->tour_sort}}</td>
                  <td>
                     @if($show_tour->tour_suggest == null)
                     <i class="far fa-times-circle"></i>
                     @else
                     <i class="far fa-check-circle"></i>
                     @endif
                  </td>
                  <td>
                     <a href="/admin/admin-edit-tour-step/{{$show_tour->_id}}" class="btn btn-warning">แก้ไข</a>
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
   });
</script>
@endsection