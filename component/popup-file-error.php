<div class="popup-container" data-popup="99">
  <div class="wrapper">
    <div class="close-filter btn-popup-toggle" data-popup="99"></div>
    <div class="popup-box">
      <div class="box-body pos-relative">
        <a class="close-icon btn-popup-toggle" data-popup="99" href="#">
          <em class="zmdi zmdi-close"></em>
        </a>
        <h6 class="h4 lg fw-600 text-center">แจ้งไฟล์เสีย</h6>
        <p class="lg mt-5">
          <span class="fw-600">ชื่อไฟล์</span> 
          คู่มือการพัฒนาความร่วมมือในการจัดการพลังงานไฟฟ้าจากขยะ
        </p>
        <form id="form-contact" action="" method="POST">
          <div class="gallery-grids mt-2">
            <div class="grid sm-50">
              <label class="p lg">ชื่อ <span class="color-danger">*</span></label>
              <div class="ui input">
                <input type="text" name="firstname" required />
              </div>
            </div>
            <div class="grid sm-50">
              <label class="p lg">นามสกุล <span class="color-danger">*</span></label>
              <div class="ui input">
                <input type="text" name="lastname" required />
              </div>
            </div>
            <div class="grid sm-50">
              <label class="p lg">เบอร์โทรศัพท์ <span class="color-danger">*</span></label>
              <div class="ui input">
                <input type="text" name="phone" required />
              </div>
            </div>
            <div class="grid sm-50">
              <label class="p lg">อีเมล <span class="color-danger">*</span></label>
              <div class="ui input">
                <input type="email" name="email" required />
              </div>
            </div>
            <div class="grid sm-100">
              <label class="p lg">ข้อความ <span class="color-danger">*</span></label>
              <div class="ui form">
                <textarea rows="5" name="message" required></textarea>
              </div>
            </div>
          </div>
          <div class="d-flex jc-center mt-5">
            <div class="capcha-container">
              <img class="img" src="public/assets/app/img/default/capcha.png" alt="Capcha Image" />
            </div>
          </div>
          <div class="btns text-center mt-4">
            <button type="reset" class="btn btn-action btn-03 btn-round btn-mw ml-1 mr-1">
              ล้างข้อมูล
            </button>
            <button type="submit" class="btn btn-action btn-02 btn-round btn-mw ml-1 mr-1">
              ส่งข้อมูล
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
