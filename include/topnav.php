
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
						] as $i=>$d){
					?>
						<div class="menu has-children">
							<a href="#" data-menu="<?= $i ?>">
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

<!-- Mega Nav -->
<nav class="mega-nav">
	<div class="anchor-container">
		<div class="wrapper">
			<div class="pattern">
				<svg 
					xmlns="http://www.w3.org/2000/svg"
					xmlns:xlink="http://www.w3.org/1999/xlink"
					width="663px" height="455px"
				>
					<path fill-rule="evenodd" opacity="0.2" 
					d="M105.950,282.765 C64.322,337.418 47.714,389.612 67.681,422.025 C90.376,458.865 154.742,463.519 235.633,441.228 C295.441,424.748 363.652,393.869 432.628,350.044 C544.017,279.271 626.181,192.884 653.775,125.153 C660.137,109.536 664.886,87.924 662.312,66.759 C660.176,49.191 653.875,34.247 637.626,21.398 C650.223,65.738 622.731,120.345 562.790,187.553 C527.097,230.943 474.522,276.746 411.001,316.915 C369.969,342.864 328.912,365.215 290.421,380.651 C195.249,418.818 115.756,421.538 91.076,381.661 C76.718,358.463 83.651,322.339 105.950,282.765 L105.950,282.765 ZM223.172,384.442 C215.775,386.446 208.321,388.260 200.816,389.879 C199.936,388.142 199.048,386.405 198.154,384.669 C143.744,279.061 62.950,173.627 0.000,112.018 C15.475,108.908 31.706,109.256 42.050,114.062 C108.433,186.405 164.558,270.912 219.014,376.341 C220.401,379.027 221.787,381.729 223.172,384.442 L223.172,384.442 ZM263.507,371.412 C255.306,374.502 247.013,377.350 238.638,379.950 C237.163,376.730 235.668,373.513 234.156,370.296 C177.553,249.939 95.040,132.357 10.298,57.055 C31.908,55.959 49.193,57.909 62.155,62.903 C138.206,145.782 203.351,243.658 258.461,360.594 C260.152,364.182 261.834,367.788 263.507,371.412 L263.507,371.412 ZM115.656,42.035 C185.378,116.031 249.861,215.482 309.105,340.377 C310.477,343.270 311.848,346.174 313.215,349.095 C302.422,354.762 291.409,359.980 280.202,364.732 C278.639,361.082 277.059,357.440 275.457,353.809 C219.511,226.954 140.229,111.017 39.807,6.000 C154.661,2.854 250.583,28.476 327.573,82.867 C338.959,74.701 352.323,66.438 367.665,58.078 C405.865,37.264 461.888,13.362 515.439,4.322 C540.178,0.146 566.559,-1.341 588.198,2.605 C610.507,6.674 622.096,15.065 626.841,27.399 C634.410,47.079 622.766,76.822 611.095,101.259 C616.943,83.537 616.638,70.630 612.310,61.075 C608.438,52.526 601.479,47.459 592.787,43.800 C571.251,34.734 539.183,38.339 515.108,42.741 C455.044,53.723 394.170,81.090 327.573,131.371 C262.627,77.682 191.987,47.903 115.656,42.035 Z"/>
				</svg>
			</div>
			<div class="menu-container">
				<?php
					foreach([
						'แนะนำ', 'การประเมินภายนอก', 'สื่อสารองค์กร',
						'การให้บริการ', 'แผน/ผลดำเนินงาน', 'ติดต่อ'
					] as $i=>$d){
				?>
					<div class="menu-wrapper" data-menu="<?= $i ?>">
						<div class="header">
							<div class="container">
								<div class="header-wrapper">
									<div class="icon"><em class="fas fa-signal"></em></div>
									<p class="xl fw-600"><?= $d ?></p>
									<a class="btn-close" href="#">
										<em class="zmdi zmdi-close"></em>
										ปิดเมนู
									</a>
								</div>
							</div>
						</div>
						<div class="body">
							<div class="container">
								<div class="submenu-set">
									<div class="grids">
										<?php
											foreach([
												'แผนยุทธศาสตร์', 'แผนปฏิบัติงานประจำปี', 
												'คำรับรองการปฏิบัติงาน/ ตัวชี้วัด', 'รายงานประจำปี'
											] as $j=>$k){
										?>
											<div class="grid lg-25">
												<div class="submenu">
													<a href="#"><?= $k ?></a>
												</div>
											</div>
										<?php }?>
									</div>
								</div>
								<div class="submenu-set">
									<div class="grids">
											<?php
												foreach([
													'รายงานผลการดำเนินงาน', 'รายงานการติดตามประเมินผลการดำเนินงานและบริหารความเสี่ยง', 
													'รายงานผลการติดตามและทบทวนความเพียงพอของระบบบริหารจัดการฯ (COSO)',
													'การบริหารและพัฒนาทรัพยากรบุคคล'
												] as $j=>$k){
											?>
												<div class="grid lg-25">
													<div class="submenu <?= $j==0? 'has-children': '' ?>">
														<a href="#"><?= $k ?></a>
														<?php if($j==0){?>
															<div class="submenu-toggle"><em class="zmdi zmdi-chevron-down"></em></div>
															<div class="submenu-container">
																<div class="submenu">
																	<a href="#">รายงานผลการดำเนินงานตามนโยบายของรัฐบาล</a>
																</div>
																<div class="submenu">
																	<a href="#">รายงานการติดตามผลดำเนินงาน</a>
																</div>
																<div class="submenu">
																	<a href="#">รายงานผลการดำเนินงาน สมศ.</a>
																</div>
															</div>
														<?php }?>
													</div>
												</div>
											<?php }?>
										</div>
								</div>
								<div class="submenu-set">
									<div class="grids">
											<?php
												foreach([
													'การประเมินคุณธรรมและความโปร่งใส (ITA)', 'การป้องกันการทุจริต', 
													'แผนปฏิบัติการป้องกันการทุจริต', 'การส่งเสริมความโปร่งใสภายในองค์กร'
												] as $j=>$k){
											?>
												<div class="grid lg-25">
													<div class="submenu <?= $j==0? 'has-children': '' ?>">
														<a href="#"><?= $k ?></a>
														<?php if($j==0){?>
															<div class="submenu-toggle"><em class="zmdi zmdi-chevron-down"></em></div>
															<div class="submenu-container">
																<div class="submenu">
																	<a href="#">ปิงบประมาณ พ.ศ.2561</a>
																</div>
																<div class="submenu">
																	<a href="#">ปีงบประมาณ พ.ศ.2562</a>
																</div>
																<div class="submenu">
																	<a href="#">ปิงบประมาณ พ.ศ.2563</a>
																</div>
																<div class="submenu">
																	<a href="#">ปีงบประมาณ พ.ศ.2564</a>
																</div>
															</div>
														<?php }?>
													</div>
												</div>
											<?php }?>
										</div>
								</div>
							</div>
						</div>
					</div>
				<?php }?>
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
