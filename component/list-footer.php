<?php if(!empty($listFooter)){?>
  <div class="list-footer">
    <?php if(in_array('total', $listFooter)){?>
      <div class="option">
        จำนวนหน้าทั้งหมด <span class="fw-600 color-03 ml-1">400 รายการ</span>
      </div>
    <?php }?>
    <?php if(in_array('paginate', $listFooter)){?>
      <div class="option">
        <div class="paginate">
          <div class="arrow arrow-prev">
            <em class="zmdi zmdi-long-arrow-left"></em>
          </div>
          <div class="pages">
            <a class="page active" href="#">1</a>
            <a class="page" href="#">2</a>
            <a class="page" href="#">3</a>
            <a class="page" href="#">4</a>
            <div class="dot">...</div>
            <a class="page" href="#">17</a>
            <a class="page" href="#">18</a>
            <a class="page" href="#">19</a>
            <a class="page" href="#">20</a>
          </div>
          <div class="arrow arrow-next">
            <em class="zmdi zmdi-long-arrow-right"></em>
          </div>
        </div>
      </div>
    <?php }?>
    <?php if(in_array('pp', $listFooter)){?>
      <div class="option">
        เลือกการแสดงผล
        <select class="ui dropdown xs ml-1">
          <option value="12" selected>12</option>
          <option value="24">24</option>
          <option value="36">36</option>
          <option value="48">48</option>
          <option value="60">60</option>
          <option value="72">72</option>
          <option value="84">84</option>
          <option value="96">96</option>
        </select>
      </div>
    <?php }?>
  </div>
<?php }?>
