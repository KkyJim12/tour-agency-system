@extends('layouts.master')
@section('title')
@if($tour->tour_seo_title)
{{$tour->tour_seo_title}}
@else
{{$tour->tour_name}}
@endif
@endsection
@section('meta')
@if($tour->tour_seo_meta)
{{$tour->tour_seo_meta}}
@else
{{$tour->tour_hightlight}}
@endif
@endsection
@section('content')

<div class='categoryPage'>
  <div class="banner" style="background:url('{{$tour_banner->content}}') no-repeat center center; background-size: cover;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
          <div class="titleBanner">
            <p>- {{$tour->tour_country_name}} -</p>
            <h6>{{$tour->tour_name}}</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-8 panalLeft">
        @include('components.tour-slide')
        <h3 class="mt-3 mb-4">{{$tour->tour_name}}</h3>
        <div class="content">
          <div class="row">
            <div class="col-5">
              <h5>ราคาเริ่มต้น</h5>
            </div>
            <div class="col-7">
              <h4 class='text-right'><span>{{number_format($tour->tour_price_show)}}</span> บาท/ท่าน</h4>
            </div>
            <div class="col-6">
              <h5>ติดต่อสอบถามโปรแกรมทัวร์</h5>
            </div>
            <div class="col-6 contact text-right">
              <span><a href="mailto:{{$tour->tour_staff_email}}"><img src="/assets/img/components/contact-1.png" alt="contact_img"></a></span>
              <span><a href="http://line.me/ti/p/{{$tour->tour_staff_line}}" target="_blank"><img src="/assets/img/components/contact-2.png" alt="contact_img"></a></span>
              <span><a href="tel:+66 {{$tour->tour_staff_phone}}"><img src="/assets/img/components/contact-3.png" alt="contact_img"></a></span>
            </div>
          </div>
          <div class="tour-info">
            <div class="row">
              <div class="col-md-6 text-left">
                <p class='text-uppercase'>ประเทศ:<span>{{$tour->tour_country_name}}</span> </p>
              </div>
              <div class="col-md-6 text-left">
                <p class='text-uppercase'>ระยะเวลา:<span>{{$tour->tour_day}} วัน {{$tour->tour_night}} คืน</span> </p>
              </div>
              <div class="col-md-6 text-left">
                <p class='text-uppercase'>สายการบิน:<span>{{$tour->tour_airline_name}}</span> </p>
              </div>
              <div class="col-md-6 text-left">
                <p class='text-uppercase'>ช่วงเวลา:
                  <span>
                    @if($tour->tour_month == $tour->tour_month_last)
                    {{formDateThai(DateTime::createFromFormat('!m', $tour->tour_month)->format('F'))}}
                    @else
                    {{formatDateThai(DateTime::createFromFormat('!m', $tour->tour_month)->format('F'))}} - {{formatDateThai(DateTime::createFromFormat('!m', $tour->tour_month_last)->format('F'))}}
                    @endif
                  </span>
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 my-4">
              <p>{!!$tour->tour_hightlight!!}</p>
            </div>
          </div>
          <div class="tour-info px-4 py-3">
            <h5 class='mb-2'>ดาวน์โหลดไฟล์โปรแกรม</h5>
            <a href="/assets/img/upload/tour/pdf/{{$tour->tour_pdf}}" download><img src="/assets/img/components/pdf.png" alt="pdf"> </a>
          </div>
          <div class="row mt-5">
            <div class="col-md-12">
              <h5>กำหนดการเดินทาง/อัตราค่าบริการ</h5>
            </div>
            @if(session('success'))
            <div class="col-md-12">
              <div class="alert alert-success" role="alert">
                {{session('success')}}
              </div>
            </div>
            @endif
            @if ($errors->any())
            <div class="col-md-12">
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            </div>
            @endif
            <div class="col-md-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col" class='text-center'>วันไป</th>
                    <th scope="col" class='text-center'>วันกลับ</th>
                    <th scope="col" class='text-center'>ราคา</th>
                    <th scope="col" class='text-center'>จอง</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $rowGroup = 0;
                  $rowCounter = 0;
                  ?>
                  @foreach($tour->tour_start_date as $tc => $tsd)
                  <?php
                  if ($rowCounter <= 4) {
                    $cgrp = $rowGroup;
                    $rowCounter++;
                  } else {
                    $rowGroup++;
                    $cgrp = $rowGroup;
                    $rowCounter = 1;
                  }
                  ?>
                  <tr class='tdrg tdatetable_rg_{{$cgrp}}'>
                    <td class='text-center'>{{date('d/m/Y',strtotime($tour->tour_start_date[$tc]))}}</td>
                    <td class='text-center'>{{date('d/m/Y',strtotime($tour->tour_end_date[$tc]))}}</td>
                    <td class='text-center'>{{number_format($tour->tour_price[$tc])}}</td>
                    <td class='text-center'>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btnCheckin py-1 px-3" data-toggle="modal" data-target="#modal{{$loop->iteration}}">
                        จอง
                      </button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

              <br />
              <a class="btn btn-primary btn-block" style="display: none;" id="btnShowMoreInDTable" href="#">แสดงเพิ่มเติม</a>

            </div>

            <script>
              var tdatetable_count_grps = parseInt({
                {
                  $rowGroup
                }
              });
              var current_tdp = 0;

              function showGroup(group) {
                $(".tdatetable_rg_" + group).show();
              }
              $(function() {
                $(".tdrg").hide();
                showGroup(0);
                if (tdatetable_count_grps > 0) {
                  $("#btnShowMoreInDTable").show();
                }
              });
              $("#btnShowMoreInDTable").click(function(e) {
                e.preventDefault();
                if (current_tdp < tdatetable_count_grps) {
                  current_tdp += 1;
                  showGroup(current_tdp);
                }
                if (current_tdp == tdatetable_count_grps) {
                  $("#btnShowMoreInDTable").hide();
                }
              });
            </script>

          </div>
          <div class="row mt-5">
            <nav class="col-12">
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link tour-tab active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">รายละเอียดโปรแกรม</a>
                <a class="nav-item nav-link tour-tab" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">เงื่อนไขการเดินทาง</a>
              </div>
            </nav>
            <div class="tab-content col-lg-12 mt-3" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div id="tourpdf-viewer-normal">
                  <embed src="/assets/img/upload/tour/pdf/{{$tour->tour_pdf}}" type="application/pdf" width="100%" height="600px">
                </div>
                <div id="tourpdf-viewer-mobile-hack" style="display: none;">
                  <div class="embed-responsive embed-responsive-1by1">
                    <iframe class="fluidframe embed-responsive-item" frameborder="0" src="/pdfjs/web/viewer.html?file=/assets/img/upload/tour/pdf/{{$tour->tour_pdf}}"></iframe>
                  </div>
                </div>
                <script>
                  function switchPdfToMobile() {
                    $("#tourpdf-viewer-normal").hide();
                    $("#tourpdf-viewer-mobile-hack").show();
                  }
                  $(function() {
                    if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) ||
                      /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {
                      switchPdfToMobile();
                    }
                  });
                </script>
              </div>
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">{!!$tour->tour_condition!!}</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="panalRight">
          <div class="social">
            <h1 class="mt-3">Social Link</h1>
            <div class="fb-share-button" data-layout="box_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">แชร์</a></div>
          </div>
          <div class="other">
            <h1>คิดจะเที่ยวคิดถึงรอยัลทัวร์</h1>
            @foreach($continent as $all_continent)
            <div class="row">
              <div class="col-12">
                <h2>{{$all_continent->continent_name}}</h2>
              </div>
              <hr>
              @foreach($all_continent->subcat as $subcat)
              <div class="col-6 iconCountry">
                <a class="country-link" href="/category/{{$subcat->_id}}">
                  <span><img class="tour-cat-img" src="/assets/img/upload/country/{{$subcat->country_img}}" alt="country_img"></span>
                  {{$subcat->country_name}}
                </a>
              </div>
              @endforeach
            </div>
            <hr>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@foreach($tour->tour_start_date as $tc => $tsd)
<!-- Modal -->
<div style="text-align:left;" class="modal fade" id="modal{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{str_limit($tour->tour_name,35)}} </br> {{date('d/m/Y',strtotime($tour->tour_start_date[$tc]))}} ถึง {{date('d/m/Y',strtotime($tour->tour_end_date[$tc]))}} | ราคา {{number_format($tour->tour_price[$tc])}} บาท/คน</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/reserve-tour-process" method="post">
          <div class="form-group">
            <label>ชื่อผู้จอง</label>
            <input class="form-control" type="text" name="reserve_name" value="" placeholder="กรุณากรอกชื่อ">
          </div>
          <div class="form-group">
            <label>จำนวนผู้เดินทาง</label>
            <input class="form-control" type="number" name="reserve_qty" value="" placeholder="กรุณากรอกจำนวน">
          </div>
          <div class="form-group">
            <label>เบอร์โทร</label>
            <input class="form-control" type="number" name="reserve_tel" value="" placeholder="กรุณากรอกเบอร์โทร">
          </div>
          <div class="form-group">
            <label>รายละเอียดอื่นๆ</label>
            <textarea class="form-control" name="reserve_info" rows="6" cols="80" placeholder="รายละเอียดเพิ่มเติม"></textarea>
          </div>
          <input type="hidden" name="reserve_tour_id" value="{{$tour->_id}}">
          <input type="hidden" name="reserve_tour_name" value="{{$tour->tour_name}}">
          <input type="hidden" name="reserve_tour_start_date" value="{{$tour->tour_start_date[$tc]}}">
          <input type="hidden" name="reserve_tour_end_date" value="{{$tour->tour_end_date[$tc]}}">
          @csrf
          <button class="btn btn-success form-control" type="submit" name="button">ลงชื่อจอง</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection