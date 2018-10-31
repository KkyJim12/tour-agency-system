<!--Search Box-->
<div class="search-field">
  <div class="container search-box">
      <div class="row">
        <div class="col-md-12">
          <h3>ค้นหาทัวร์</h3>
        </div>
        <div class="col-md-12 mt-3">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <form action="index.html" method="post">
                <div class="row">
                  <div class="form-group col-lg-3 mb-2">
                    <label>จุดหมาย</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-city"></i></span>
                      </div>
                      <input type="text" class="form-control" placeholder="ชื่อประเทศ / เมือง" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                  </div>
                  <div class="form-group col-lg-3 mb-2">
                    <label>ช่วงเวลาเดินทาง</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="far fa-calendar-alt"></i></span>
                      </div>
                      <select class="form-control" name="">
                        <option value="">มกราคม</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group col-lg-3 mb-4">
                    <label>รหัสทัวร์</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-list-ol"></i></span>
                      </div>
                      <input class="form-control" type="text" name="" value="" placeholder="รหัสทัวร์">
                    </div>
                  </div>
                  @csrf
                  <div class="form-group col-lg-3">
                    <label class="d-none d-sm-none d-md-block d-lg-block">&nbsp</label>
                      <button class="form-control btn btn-success" type="sumit" name="button"><i class="fas fa-search"></i> Search</button>
                  </div>

                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--End Search Box-->
