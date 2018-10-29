<!--Search Box-->
<div class="search-field">
  <div class="container search-box">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item col-4">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-search"></i>ค้นหาทัวร์ Tours</a>
            </li>
            <li class="nav-item col-4">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">เรือสำราญ</a>
            </li>
            <li class="nav-item col-4">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">บัตรเข้าชม / ตั๋วรถไฟ</a>
            </li>
          </ul>
        </div>
      </div>
        <div class="col-lg-12 mt-3">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <form class="row" action="index.html" method="post">
                <label for=""></label>
                <input class="form-control col-md-4 mt-2" type="text" name="" value="" placeholder="ชื่อประเทศ / เมือง">
                <select class="form-control col-md-3 mt-2" type="date" name="" value="" placeholder="เลือกเดือน">
                  <option value="">เลือกเดือน</option>
                  <option value="">มกราคม</option>
                  <option value="">กุมภาพันธ์</option>
                  <option value="">มีนาคม</option>
                  <option value="">เมษายน</option>
                  <option value="">พฤษภาคม</option>
                  <option value="">มิถุนายน</option>
                  <option value="">กรกฎาคม</option>
                  <option value="">สิงหาคม</option>
                  <option value="">กันยายน</option>
                  <option value="">ตุลาคม</option>
                  <option value="">พฤษจิกายน</option>
                  <option value="">ธันวาคม</option>
                </select>
                <input class="form-control col-md-2 mt-2" type="text" name="" value="" placeholder="รหัสทัวร์">
                @csrf
                <button class="form-control btn btn-success col-md-3 mt-2" type="sumit" name="button"><i class="fas fa-search"></i> Search</button>
              </form>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
          </div>
        </div>
    </div>
  </div>
<!--End Search Box-->
