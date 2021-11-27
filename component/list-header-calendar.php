<?php if(!empty($listHeader)){?>
  <div class="list-header calendar <?= isset($listHeaderClass)? $listHeaderClass: '' ?>">
    <div class="slots">
      
      <?php if(isset($listHeader['tabs'])){?>
        <div class="slot">
          <div class="tabs">
            <?php foreach($listHeader['tabs'] as $i=>$tab){?>
              <a class="tab <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>" href="#">
                <p class="h6 fw-500"><?= $tab ?></p>
              </a>
            <?php }?>
          </div>
        </div>
      <?php }?>

      <?php if(isset($listHeader['search']) || isset($listHeader['view'])){?>
        <div class="slot">
            <div class="options">
              <?php if(isset($listHeader['search'])){?>
                <div class="option option-search">
                  <div class="ui icon input">
                    <input type="text" placeholder="ค้นหา" />
                    <i class="search icon"></i>
                  </div>
                </div>
              <?php }?>
              <?php if(isset($listHeader['view'])){?>
                <div class="option">
                  <a class="icon-view" href="#">
                    <em class="fas fa-th"></em>
                  </a>
                  <a class="icon-view active ml-1" href="#">
                    <em class="fas fa-th-list"></em>
                  </a>
                </div>
              <?php }?>
            </div>
        </div>
      <?php }?>

    </div>
  </div>
<?php }?>
