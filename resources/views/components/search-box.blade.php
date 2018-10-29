<!--Search Box-->
<div class="search-field">
  <div class="container search-box">
      <div class="row">
        <div class="col-md-12">
          <h3>ค้นหาทัวร์</h3>
        </div>
      </div>
        <div class="col-lg-12 mt-3">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <form action="index.html" method="post">
                <div class="row">
                  <div class="input-group col-lg-3 mt-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-city"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="ชื่อประเทศ / เมือง" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                  <div class="input-group col-lg-2 mt-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-plane-departure"></i></span>
                    </div>
                    <input type="text" onfocus="(this.type='date')" class="form-control" placeholder="วันเดินทาง" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                  <div class="input-group col-lg-2 mt-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-plane-arrival"></i></span>
                    </div>
                    <input type="text" onfocus="(this.type='date')" class="form-control" placeholder="วันกลับ" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                  <div class="input-group col-lg-3 mt-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-list-ol"></i></span>
                    </div>
                    <input class="form-control" type="text" name="" value="" placeholder="รหัสทัวร์">
                  </div>
                  @csrf
                  <button class="form-control btn btn-success col-lg-2 mt-2" type="sumit" name="button"><i class="fas fa-search"></i> Search</button>
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
          </div>
        </div>
    </div>
  </div>
<!--End Search Box-->
