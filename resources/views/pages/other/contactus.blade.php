@extends('layouts.master')
@section('title')
Royaltour | ติดต่อเรา
@endsection
@section('meta')
Royaltour | ติดต่อเรา
@endsection
@section('content')
<div class="jumbotron jumbotron-fluid" style="background:url('/assets/img/components/image_bg_9.jpg'); text-align:center; color:white;">
   <div class="container">
      <h1>ติดต่อเรา</h1>
      <p>หน้าแรก > ติดต่อเรา</p>
   </div>
</div>
<div class="container">
   <h3 style="text-align:center;">ติดต่อเรา</h3>
   @if(session('success'))
   <div class="alert alert-success" role="alert">
      {{session('success')}}
   </div>
   @endif
   <form class="row" action="/contactus-process" method="post">
      <div class="col-md-6">
         <input class="mt-3 form-control" type="text" name="contact_name" value="" placeholder="ชื่อ-นามสกุล *">
      </div>
      <div class="col-md-6">
         <input class="mt-3 form-control" type="email" name="contact_email" value="" placeholder="อีเมลล์ *">
      </div>
      <div class="col-md-12">
         <input class="form-control mt-3" type="text" name="contact_tel" value="" placeholder="โทรศัพท์ *">
      </div>
      <div class="col-md-12">
         <textarea class="form-control mt-3" name="contact_info" rows="8" cols="80" placeholder="รายละเอียด"></textarea>
      </div>
      <div class="col-md-12">
         @csrf
         <button class="btn btn-success mt-3 form-control" type="submit" name="button">ส่ง</button>
      </div>
   </form>
   <div class="row mt-5">
      <div class="col-md-12">
         <span>{!!$content->content!!}</span>
      </div>
   </div>
   <div class="row mt-5">
      @foreach($branch as $show_branch)
      <div class="col-md-12 mt-5">
         <h5>ติดต่อฝ่ายขายรอยัลทัวร์ ({{$show_branch->branch_name}})</h5>
         <div class="contact-table">
            <table class="table table-striped">
               <tbody>
                  @foreach($show_branch->subcon as $show_con)
                  <tr>
                     <th scope="row">{{$show_con->staff_name}}</th>
                     <td>Tel: {{$show_con->staff_tel}}</td>
                     <td>Line: <a href="http://line.me/ti/p/@royaltour/{{$show_con->staff_line}}" target="_blank" rel="noopener noreferrer">{{$show_con->staff_line}}</a> </td>
                     <td><a href="{{$show_con->staff_facebook}}">Facebook</a> </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
      @endforeach
   </div>
</div>
@endsection
