
<!-- Super Topnav -->
<nav class="super-topnav">
	<div class="container">
		<div class="options">
			<div class="option w-full">
				<p class="xxs text-center w-full">
					การดำเนินงานของ สมศ.ในสถานการณ์การแพร่ระบาดของโรคติดเชื้อไวรัสโคโรนา 2019 (COVID-19) ระลอกใหม่
				</p>
			</div>
			<div class="option">
				<div class="option-btn">
					<a class="type-01" href="#">
						<div class="icon">
							<em class="fas fa-sitemap"></em>
						</div>
					</a>
				</div>
				<div class="option-btn">
					<a class="type-02" href="#">
						<p class="sm fw-500 mr-2">TH</p>
						<div class="chev">
							<em class="zmdi zmdi-chevron-down"></em>
						</div>
					</a>
					<div class="dropdown">
						<div class="items">
							<a class="item" href="#">EN</a>
							<a class="item" href="#">TH</a>
						</div>
					</div>
				</div>
				<div class="option-btn">
					<a class="type-03" href="#">
						<div class="icon">
							<em class="fas fa-comments"></em>
						</div>
						<p class="xxs">ช่องทางร้องเรียน</p>
					</a>
				</div>
			</div>
		</div>
	</div>
</nav>


<!-- Topnav -->
<nav class="topnav">
	<div class="container">
		<div class="options">
			<div class="option">
				<a class="logo color-gray h-color-01" href="#">
					<img src="public/assets/app/img/logo.png" alt="Logo" />
					<p>
						สำนักงานรับรองมาตรฐานและประเมิน <br>
						คุณภาพการศึกษา(องค์การมหาชน)
					</p>
        </a>
			</div>
			<div class="option option-right">
				<div class="menu-container hide-tablet">
					<?php
						foreach([
							'แนะนำ', 'การประเมินภายนอก', 'สื่อสารองค์กร',
							'การให้บริการ', 'แผน/ผลดำเนินงาน', 'ติดต่อ'
						] as $d){
					?>
						<div class="menu">
							<a href="#">
								<?= $d ?>
							</a>
						</div>
					<?php }?>
				</div>
			</div>
			<div class="option ml-2">
				<a class="option-btn global-search-toggle" href="#">
					<em class="zmdi zmdi-search"></em>
				</a>
				<div class="option-btn sidenav-toggle show-tablet">
					<div class="hamburger">
						<div></div><div></div><div></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>


<!-- Sidenav -->
<nav class="sidenav">
	<div class="wrapper">
		<div class="sidenav-toggle">
			<div class="hamburger">
				<div></div><div></div><div></div>
			</div>
		</div>
		<div class="scroll-wrapper" data-simplebar>
			<div class="items">
				<div class="item">
					ขนาดตัวอักษร 
					<a class="btn-circle btn-font-size dark ml-3" href="#" data-size="-1">-</a>
					<a class="btn-circle btn-font-size ml-2" href="#" data-size="0">ก</a>
					<a class="btn-circle btn-font-size dark ml-3" href="#" data-size="1">+</a>
				</div>
				<div class="item">
					ความตัดกันของสี 
					<a class="btn-circle btn-theme ml-3" href="#" data-theme="0">ก</a>
					<a class="btn-circle btn-theme btn-theme-1 ml-1" href="#" data-theme="1">ก</a>
					<a class="btn-circle btn-theme btn-theme-2 ml-1" href="#" data-theme="2">ก</a>
				</div>
				<div class="item">
					ภาษา 
					<a class="btn-circle ml-3" href="#">
						<div class="fit img-fill" style="background-image:url('public/assets/app/img/default/th_flag.png');"></div>
					</a> 
					<a class="btn-circle inactive ml-2" href="#">
						<div class="fit img-fill" style="background-image:url('public/assets/app/img/default/us_flag.png');"></div>
					</a>
				</div>
			</div>
			<div class="menu-container"></div>
		</div>
	</div>
</nav>
<div class="sidenav-filter"></div>


<!-- Option Nav -->
<nav class="option-nav">
	<div class="wrapper">

		<div class="option-btn">
			<a class="option-icon" href="#">
				<div class="icon"><img src="public/assets/app/img/icon/access.svg" alt="Icon Main" /></div>
				<div class="text">การเข้าถึง</div>
				<div class="close"><img src="public/assets/app/img/icon/close.svg" alt="Icon Close" /></div>
			</a>
			<div class="dropdown">
				<div class="wrapper">
					<div class="items">
						<div class="item">
							<p>ขนาดตัวอักษร</p>
							<div class="btns btn-set">
								<a class="btn-font-size" href="#" data-size="13">ก</a>
								<a class="btn-font-size active" href="#" data-size="16">ก</a>
								<a class="btn-font-size" href="#" data-size="20">ก</a>
							</div>
						</div>
						<div class="item">
							<p>ความคมชัด</p>
							<div class="btns">
								<a class="btn btn-theme w-full" href="#" data-theme="0">ปกติ</a>
							</div>
							<div class="btns">
								<a class="btn btn-theme btn-theme-1" href="#" data-theme="1">ขาวดำ</a>
								<a class="btn btn-theme btn-theme-2" href="#" data-theme="2">ตาบอดสี</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="option-btn">
			<a class="option-icon red" href="#">
				<div class="icon"><img src="public/assets/app/img/icon/embed.svg" alt="Icon Main" /></div>
				<div class="text">เมนูด่วน</div>
				<div class="close"><img src="public/assets/app/img/icon/close.svg" alt="Icon Close" /></div>
			</a>
		</div>

	</div>
</nav>
