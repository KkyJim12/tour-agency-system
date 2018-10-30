@extends('layouts.master')

@section('content')
<div class="jumbotron jumbotron-fluid category-title">
  <div class="container">
    <h1 class="display-4">ทัวร์ต่างประเทศ</h1>
    <p>หน้าแรก > ทัวร์ต่างประเทศ</p>
  </div>
</div>

<!-- Filter -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <strong><h3>Korea (35)</h3> </strong>
      <h5>เกาหลี:ทั้งหมด 35 โปรแกรม</h5>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="filter col-md-3 mb-4">
      <form class="" action="index.html" method="post">
        <h3>ค้นหาโปรแกรมทัวร์</h3>
        <label>ค้นหา</label>
        <input class="form-control mb-3" type="text" name="" value="" placeholder=" ค้นหา">
        <label>ชื่อประเทศ/เมือง</label>
        <select class="form-control mb-3" name="">
          <option value="">ชื่อประเทศ/เมือง</option>
        </select>
        <label>ช่วงเวลาเดินทาง</label>
        <input class="form-control mb-3" type="text" onfocus="(this.type='date')" name="" value="" placeholder="วันเดินทาง">
        <input class="form-control mb-3" type="text" onfocus="(this.type='date')" name="" value="" placeholder="วันกลับ">
        <label>สายการบิน</label>
        <input class="form-control mb-3" type="text" name="" value="" placeholder="เลือกสายการบิน">
        <label>รหัสทัวร์</label>
        <input class="form-control mb-3" type="text" name="" value="" placeholder="รหัสทัวร์">
        @csrf
        <button class="form-control btn btn-success mb-2" type="button" name="button"><i class="fas fa-search"></i>Search</button>
      </form>
    </div>
    <div class="col-md-9">
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-3">
          <div class="card tour-box">
            <img class="card-img-top" src="/assets/img/tour/tour-1.jpg" alt="tour_suggest">
            <div class="card-body">
              <h5 class="card-title"><strong>Tokyo สุดมันส์</strong></h5>
              <small><i>Japan - โตเกี่ยว 5 วัน 3 คืน</i></small>
              <div class="tour-detail-box mt-2">
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
              </div>
              <div class="tour-date-box mt-2">
                <p>ช่วงเวลา: ตุลาคม-พฤษจิกายน 2561</p>
              </div>
              <div class="row mt-3">
                <span class="col-6">เริ่ม 22222 บาท</span>
                <img class="col-6" src="/assets/img/airline/airline-1.jpg" alt="airline_suggest">
              </div>
              <div class="row mt-3">
                <img class="col-6" src="/assets/img/components/btn-detail.png" alt="tour-detail">
                <img class="col-6" src="/assets/img/components/btn-file.png" alt="tour-file">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-3">
          <div class="card tour-box">
            <img class="card-img-top" src="/assets/img/tour/tour-1.jpg" alt="tour_suggest">
            <div class="card-body">
              <h5 class="card-title"><strong>Tokyo สุดมันส์</strong></h5>
              <small><i>Japan - โตเกี่ยว 5 วัน 3 คืน</i></small>
              <div class="tour-detail-box mt-2">
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
              </div>
              <div class="tour-date-box mt-2">
                <p>ช่วงเวลา: ตุลาคม-พฤษจิกายน 2561</p>
              </div>
              <div class="row mt-3">
                <span class="col-6">เริ่ม 22222 บาท</span>
                <img class="col-6" src="/assets/img/airline/airline-1.jpg" alt="airline_suggest">
              </div>
              <div class="row mt-3">
                <img class="col-6" src="/assets/img/components/btn-detail.png" alt="tour-detail">
                <img class="col-6" src="/assets/img/components/btn-file.png" alt="tour-file">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-3">
          <div class="card tour-box">
            <img class="card-img-top" src="/assets/img/tour/tour-1.jpg" alt="tour_suggest">
            <div class="card-body">
              <h5 class="card-title"><strong>Tokyo สุดมันส์</strong></h5>
              <small><i>Japan - โตเกี่ยว 5 วัน 3 คืน</i></small>
              <div class="tour-detail-box mt-2">
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
              </div>
              <div class="tour-date-box mt-2">
                <p>ช่วงเวลา: ตุลาคม-พฤษจิกายน 2561</p>
              </div>
              <div class="row mt-3">
                <span class="col-6">เริ่ม 22222 บาท</span>
                <img class="col-6" src="/assets/img/airline/airline-1.jpg" alt="airline_suggest">
              </div>
              <div class="row mt-3">
                <img class="col-6" src="/assets/img/components/btn-detail.png" alt="tour-detail">
                <img class="col-6" src="/assets/img/components/btn-file.png" alt="tour-file">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-3">
          <div class="card tour-box">
            <img class="card-img-top" src="/assets/img/tour/tour-1.jpg" alt="tour_suggest">
            <div class="card-body">
              <h5 class="card-title"><strong>Tokyo สุดมันส์</strong></h5>
              <small><i>Japan - โตเกี่ยว 5 วัน 3 คืน</i></small>
              <div class="tour-detail-box mt-2">
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
              </div>
              <div class="tour-date-box mt-2">
                <p>ช่วงเวลา: ตุลาคม-พฤษจิกายน 2561</p>
              </div>
              <div class="row mt-3">
                <span class="col-6">เริ่ม 22222 บาท</span>
                <img class="col-6" src="/assets/img/airline/airline-1.jpg" alt="airline_suggest">
              </div>
              <div class="row mt-3">
                <img class="col-6" src="/assets/img/components/btn-detail.png" alt="tour-detail">
                <img class="col-6" src="/assets/img/components/btn-file.png" alt="tour-file">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-3">
          <div class="card tour-box">
            <img class="card-img-top" src="/assets/img/tour/tour-1.jpg" alt="tour_suggest">
            <div class="card-body">
              <h5 class="card-title"><strong>Tokyo สุดมันส์</strong></h5>
              <small><i>Japan - โตเกี่ยว 5 วัน 3 คืน</i></small>
              <div class="tour-detail-box mt-2">
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
              </div>
              <div class="tour-date-box mt-2">
                <p>ช่วงเวลา: ตุลาคม-พฤษจิกายน 2561</p>
              </div>
              <div class="row mt-3">
                <span class="col-6">เริ่ม 22222 บาท</span>
                <img class="col-6" src="/assets/img/airline/airline-1.jpg" alt="airline_suggest">
              </div>
              <div class="row mt-3">
                <img class="col-6" src="/assets/img/components/btn-detail.png" alt="tour-detail">
                <img class="col-6" src="/assets/img/components/btn-file.png" alt="tour-file">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-3">
          <div class="card tour-box">
            <img class="card-img-top" src="/assets/img/tour/tour-1.jpg" alt="tour_suggest">
            <div class="card-body">
              <h5 class="card-title"><strong>Tokyo สุดมันส์</strong></h5>
              <small><i>Japan - โตเกี่ยว 5 วัน 3 คืน</i></small>
              <div class="tour-detail-box mt-2">
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
              </div>
              <div class="tour-date-box mt-2">
                <p>ช่วงเวลา: ตุลาคม-พฤษจิกายน 2561</p>
              </div>
              <div class="row mt-3">
                <span class="col-6">เริ่ม 22222 บาท</span>
                <img class="col-6" src="/assets/img/airline/airline-1.jpg" alt="airline_suggest">
              </div>
              <div class="row mt-3">
                <img class="col-6" src="/assets/img/components/btn-detail.png" alt="tour-detail">
                <img class="col-6" src="/assets/img/components/btn-file.png" alt="tour-file">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-3">
          <div class="card tour-box">
            <img class="card-img-top" src="/assets/img/tour/tour-1.jpg" alt="tour_suggest">
            <div class="card-body">
              <h5 class="card-title"><strong>Tokyo สุดมันส์</strong></h5>
              <small><i>Japan - โตเกี่ยว 5 วัน 3 คืน</i></small>
              <div class="tour-detail-box mt-2">
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
              </div>
              <div class="tour-date-box mt-2">
                <p>ช่วงเวลา: ตุลาคม-พฤษจิกายน 2561</p>
              </div>
              <div class="row mt-3">
                <span class="col-6">เริ่ม 22222 บาท</span>
                <img class="col-6" src="/assets/img/airline/airline-1.jpg" alt="airline_suggest">
              </div>
              <div class="row mt-3">
                <img class="col-6" src="/assets/img/components/btn-detail.png" alt="tour-detail">
                <img class="col-6" src="/assets/img/components/btn-file.png" alt="tour-file">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-3">
          <div class="card tour-box">
            <img class="card-img-top" src="/assets/img/tour/tour-1.jpg" alt="tour_suggest">
            <div class="card-body">
              <h5 class="card-title"><strong>Tokyo สุดมันส์</strong></h5>
              <small><i>Japan - โตเกี่ยว 5 วัน 3 คืน</i></small>
              <div class="tour-detail-box mt-2">
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
              </div>
              <div class="tour-date-box mt-2">
                <p>ช่วงเวลา: ตุลาคม-พฤษจิกายน 2561</p>
              </div>
              <div class="row mt-3">
                <span class="col-6">เริ่ม 22222 บาท</span>
                <img class="col-6" src="/assets/img/airline/airline-1.jpg" alt="airline_suggest">
              </div>
              <div class="row mt-3">
                <img class="col-6" src="/assets/img/components/btn-detail.png" alt="tour-detail">
                <img class="col-6" src="/assets/img/components/btn-file.png" alt="tour-file">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-3">
          <div class="card tour-box">
            <img class="card-img-top" src="/assets/img/tour/tour-1.jpg" alt="tour_suggest">
            <div class="card-body">
              <h5 class="card-title"><strong>Tokyo สุดมันส์</strong></h5>
              <small><i>Japan - โตเกี่ยว 5 วัน 3 คืน</i></small>
              <div class="tour-detail-box mt-2">
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
                <p class="card-text">testtesttesttest</p>
              </div>
              <div class="tour-date-box mt-2">
                <p>ช่วงเวลา: ตุลาคม-พฤษจิกายน 2561</p>
              </div>
              <div class="row mt-3">
                <span class="col-6">เริ่ม 22222 บาท</span>
                <img class="col-6" src="/assets/img/airline/airline-1.jpg" alt="airline_suggest">
              </div>
              <div class="row mt-3">
                <img class="col-6" src="/assets/img/components/btn-detail.png" alt="tour-detail">
                <img class="col-6" src="/assets/img/components/btn-file.png" alt="tour-file">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Filter -->
@endsection
