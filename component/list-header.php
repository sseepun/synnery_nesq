<?php if(!empty($listHeader)){?>
  <div class="list-header <?= isset($listHeaderClass)? $listHeaderClass: '' ?>">
  
    <?php if(in_array('search', $listHeader) || in_array('category', $listHeader) || in_array('order', $listHeader)){?>
      <div class="options">
        <?php if(in_array('search', $listHeader)){?>
          <div class="option">
            <div class="ui icon input">
              <input type="text" placeholder="ค้นหา" />
              <i class="search icon"></i>
            </div>
          </div>
        <?php }?>
        <?php if(in_array('category', $listHeader)){?>
          <div class="option">
            <select class="ui dropdown">
              <option value="">เลือกตามหมวดหมู่</option>
              <option value="1">หมวดหมู่ที่ 1</option>
              <option value="2">หมวดหมู่ที่ 2</option>
              <option value="3">หมวดหมู่ที่ 3</option>
            </select>
          </div>
        <?php }?>
        <?php if(in_array('order', $listHeader)){?>
          <div class="option">
            <select class="ui dropdown">
              <option value="">เรียงลำดับข้อมูล</option>
              <option value="1">ใหม่ที่สุด</option>
              <option value="2">เก่าที่สุด</option>
              <option value="3">เป็นที่นิยม</option>
            </select>
          </div>
        <?php }?>
      </div>
    <?php }?>

    <?php if(in_array('view', $listHeader) || in_array('expand', $listHeader)){?>
      <div class="options right">
        <?php if(in_array('view', $listHeader)){?>
          <div class="option">
            <a class="icon-view" href="#">
              <em class="fas fa-th"></em>
            </a>
            <a class="icon-view active ml-1" href="#">
              <em class="fas fa-th-list"></em>
            </a>
            <?php if(in_array('rss', $listHeader)){?>
              <a class="icon-view ml-1" href="#">
                <em class="fas fa-rss"></em>
              </a>
            <?php }?>
          </div>
        <?php }?>
        <?php if(in_array('expand', $listHeader)){?>
          <div class="option">
            <a class="icon-view faq-expand-all" href="#">
              <em class="fas fa-expand-arrows-alt"></em>
            </a>
            <a class="icon-view active ml-1 faq-collapse-all" href="#">
              <em class="fas fa-compress"></em>
            </a>
          </div>
        <?php }?>
      </div>
    <?php }?>

  </div>
<?php }?>
