
<?php if($cardType == 'CMS'){?>
  <div class="ss-card ss-card-04">
    <div class="img-container">
      <a class="ss-img adaptive" href="#">
        <div class="img-bg" style="background-image:url('public/assets/app/img/content/cms-0<?= $j%4+1 ?>.jpg');"></div>
        <div class="hover-container">
          <img class="icon-img" src="public/assets/app/img/icon/hover-read.png" alt="Image Icon" />
        </div>
      </a>
    </div>
    <div class="text-container">
      <div class="ss-tags">
        <div class="tag">ประชาสัมพันธ์โครงการ</div>
      </div>
      <a class="title h5 fw-600 mt-2" href="#">
        การประชุมหรือกลุ่มย่อย เพื่อรับฟังความคิดเห็น โครงการทบทวนและศึกษาเพื่อการปรับปรุงหลักเกณฑ์การจ่ายค่าทดแทนที่ดินและทรัพย์สิน
      </a>
      <div class="mt-1">
        <div class="ss-stats">
          <div class="stat">
            <div class="icon"><em class="far fa-clock"></em></div> 18 มกราคม 2564
          </div>
          <div class="stat">
            <div class="icon"><em class="far fa-eye"></em></div> 158
          </div>
        </div>
      </div>
      <p class="desc mt-3">
        รมว.พลังงาน ร่วมกับ คณะกรรมการการกำกับกิจการพลังงาน (กกพ.) เปิดตัวโครงการ "โซลาร์ภาค ประชาชน" 
        ให้เจ้าของบ้านและอาคารที่อยู่อาศัยที่ต้องการติดตั้งแผงเซลล์ผลิตไฟฟ้าด้วยพลังงานแสงอาทิตย์
      </p>
      <div class="mt-3">
        <a class="btn p fw-400 color-03" href="#">
          อ่านเพิ่มเติม <em class="fas fa-chevron-right ml-1"></em>
        </a>
      </div>
    </div>
  </div>
<?php }else if($cardType == 'Photo'){?>
  <div class="ss-card ss-card-04">
    <div class="img-container">
      <a class="ss-img adaptive" href="#">
        <div class="img-bg" style="background-image:url('public/assets/app/img/content/cms-0<?= $j%4+1 ?>.jpg');"></div>
        <div class="hover-container">
          <img class="icon-img" src="public/assets/app/img/icon/hover-images.png" alt="Image Icon" />
        </div>
      </a>
    </div>
    <div class="text-container">
      <div class="ss-tags">
        <div class="tag">ประชาสัมพันธ์โครงการ</div>
      </div>
      <a class="title h5 fw-600 mt-2" href="#">
        การประชุมหรือกลุ่มย่อย เพื่อรับฟังความคิดเห็น โครงการทบทวนและศึกษาเพื่อการปรับปรุงหลักเกณฑ์การจ่ายค่าทดแทนที่ดินและทรัพย์สิน
      </a>
      <div class="mt-5">
        <div class="ss-stats">
          <div class="stat">
            <div class="icon"><em class="far fa-clock"></em></div> 18 มกราคม 2564
          </div>
          <div class="stat">
            <div class="icon"><em class="far fa-images"></em></div> 22
          </div>
          <div class="stat">
            <div class="icon"><em class="far fa-eye"></em></div> 158
          </div>
        </div>
      </div>
    </div>
  </div>
<?php }else if($cardType == 'Video'){?>
  <div class="ss-card ss-card-04">
    <div class="img-container">
      <a class="ss-img adaptive" href="#">
        <div class="img-bg" style="background-image:url('public/assets/app/img/content/cms-0<?= $j%4+1 ?>.jpg');"></div>
        <div class="hover-container">
          <div class="icon">
            <em class="fas fa-play"></em>
          </div>
        </div>
      </a>
    </div>
    <div class="text-container">
      <div class="ss-tags">
        <div class="tag">ประชาสัมพันธ์โครงการ</div>
      </div>
      <a class="title h5 fw-600 mt-2" href="#">
        การประชุมหรือกลุ่มย่อย เพื่อรับฟังความคิดเห็น โครงการทบทวนและศึกษาเพื่อการปรับปรุงหลักเกณฑ์การจ่ายค่าทดแทนที่ดินและทรัพย์สิน
      </a>
      <div class="mt-5">
        <div class="ss-stats">
          <div class="stat">
            <div class="icon"><em class="far fa-clock"></em></div> 18 มกราคม 2564
          </div>
          <div class="stat">
            <div class="icon"><em class="far fa-eye"></em></div> 158
          </div>
        </div>
      </div>
    </div>
  </div>
<?php }else if($cardType == 'Magazine'){?>
  <div class="ss-card ss-card-08 <?= $j==0? 'highlight': '' ?>">
    <a class="magazine-container" href="#">
      <div class="wrapper">
        <img class="shadow" src="public/assets/app/img/magazine/shadow.png" alt="Image Shadow" />
        <img class="magazine" src="public/assets/app/img/magazine/0<?= $j%3+1 ?>.png" alt="Image Magazine" />
      </div>
    </a>
    <div class="text-container">
      <div class="ss-tags">
        <div class="tag">กิจกรรม กกพ.</div>
      </div>
      <a class="title h5 fw-600 mt-1" href="#">
        คู่มือการพัฒนาความร่วมมือในการจัดการพลังงานไฟฟ้าจากขยะ สำหรับผู้บริหารหน่วยงานและผู้นำชุมชน
      </a>
      <div class="mt-1">
        <div class="ss-stats">
          <div class="stat">
            <div class="icon"><em class="far fa-clock"></em></div> 18 มกราคม 2564
          </div>
          <div class="stat">
            <div class="icon"><em class="far fa-eye"></em></div> 158
          </div>
          <div class="stat">
            <div class="icon"><em class="fas fa-download"></em></div> 20
          </div>
        </div>
      </div>
      <div class="mt-6">
        <a class="btn p fw-400 color-03" href="#">
          อ่านเพิ่มเติม <em class="fas fa-chevron-right ml-1"></em>
        </a>
      </div>
    </div>
  </div>
<?php }else if($cardType == 'Search'){?>
  <div class="ss-card ss-card-04">
    <div class="img-container">
      <a class="ss-img adaptive" href="#">
        <div class="img-bg" style="background-image:url('public/assets/app/img/content/search-0<?= $j%6+1 ?>.jpg');"></div>
        <div class="hover-container">
          <img class="icon-img" src="public/assets/app/img/icon/hover-images.png" alt="Image Icon" />
        </div>
        <div class="img-tag">
          <img src="public/assets/app/img/icon/search-0<?= $j%6+1 ?>.png" alt="Image Tag" />
        </div>
      </a>
    </div>
    <div class="text-container with-footer">
      <a class="title h5 fw-600" href="#">
        “กกพ.” เปิดร่างทีโออาร์ โรงไฟฟ้าชุมชน 150 MW พร้อมรับคำขอขายไฟ 22 มี.ค.-2 เม.ย.64
      </a>
      <p class="desc lg mt-1">
        นายคมกฤช ตันตระวาณิชย์ เลขาธิการสำนักงานคณะกรรมการกำกับกิจการพลังงาน (สำนักงาน กกพ.) เปิดเผยว่า 
        คณะกรรมการกำกับกิจการพลังงาน (กกพ.) ได้มีมติให้ตรึงค่าไฟฟ้าผันแปร (เอฟที) 
        สำหรับการเรียกเก็บค่าไฟฟ้าในรอบเดือน พ.ค.-ส.ค.นี้ โดยให้เรียกเก็บที่ติดลบ 15.32 สตางค์ (สต.) ต่อหน่วย 
        ส่งผลให้ผู้ใช้ไฟฟ้ายังคงจ่ายค่าไฟฟ้าเท่าเดิมในอัตรา 3.61 บาทต่อหน่วย
      </p>
      <div class="mt-2">
        <a class="btn p fw-400 color-03" href="#">
          อ่านเพิ่มเติม <em class="fas fa-chevron-right ml-1"></em>
        </a>
      </div>
      <div class="card-footer">
        <div class="ss-stats">
          <div class="stat p lg">
            <div class="icon"><em class="far fa-clock"></em></div> 
            <p>18 มกราคม 2564</p>
          </div>
          <div class="v-sep"></div>
          <div class="stat">
            <p><span class="fw-600">ประเภท:</span> เอกสารดาวน์โหลด</p>
          </div>
          <div class="v-sep"></div>
          <div class="stat">
            <p>
              <span class="fw-600">ลิงก์:</span> 
              <a href="#">
                <u>https://www.erc.or.th/download/2044667</u>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php }else if($cardType == 'Calendar'){?>
  <div class="ss-card ss-card-04">
    <div class="img-container">
      <a class="ss-img adaptive" href="#">
        <div class="img-bg" style="background-image:url('public/assets/app/img/content/calendar-0<?= $j%3+1 ?>.jpg');"></div>
        <div class="hover-container">
          <img class="icon-img" src="public/assets/app/img/icon/hover-read.png" alt="Image Icon" />
        </div>
      </a>
      <div class="ss-date">
        <div class="wrapper">
          <div class="date">02</div>
          <div class="month">ส.ค.</div>
        </div>
      </div>
    </div>
    <div class="text-container with-footer">
      <a class="title h5 fw-600" href="#">
        นิทรรศการพลังงานไฟฟ้า พลังชีวิต (Clean Energy for Life)
      </a>
      <p class="desc lg mt-1">
        รมว.พลังงาน ร่วมกับ คณะกรรมการการกำกับกิจการพลังงาน (กกพ.) เปิดตัวโครงการ "โซลาร์ภาค ประชาชน" 
        ให้เจ้าของบ้านและอาคารที่อยู่อาศัยที่ต้องการติดตั้งแผงเซลล์ผลิตไฟฟ้าด้วยพลังงานแสงอาทิตย์
      </p>
      <div class="mt-2">
        <a class="btn p fw-400 color-03" href="#">
          อ่านเพิ่มเติม <em class="fas fa-chevron-right ml-1"></em>
        </a>
      </div>
      <div class="card-footer">
        <div class="ss-stats">
          <div class="stat p lg">
            <div class="icon"><em class="far fa-clock"></em></div> 18 มกราคม 2564
          </div>
          <div class="stat p lg">
            <div class="icon"><em class="far fa-eye"></em></div> 158
          </div>
          <div class="stat p lg">
            <div class="icon"><em class="fas fa-map-marker-alt"></em></div> 
            สว่างวีระวงศ์, อุบลราชธานี
          </div>
        </div>
      </div>
    </div>
  </div>
<?php }?>
