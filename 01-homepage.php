<!DOCTYPE html>
<html lang="th">
<head>
	<?php include_once('include/header.php'); ?>
	<?php include_once('include/style.php'); ?>
</head>
<body class="loading">
	<?php include_once('include/topnav.php'); ?>

	<section class="banner-01" data-counter="0">
		<div class="slide-container">
			<div class="slides">
				<?php for($i=0; $i<6; $i++){?>
					<div class="slide">
						<div class="banner-wrapper">
							<div class="img-bg img-theme" style="background-image:url('public/assets/app/img/content/banner-01.jpg');"></div>
							<div class="container pos-relative d-flex jc-end">
								<div class="text-container">
									<div class="quote-container animate" style="--delay:.6s;">
										<div class="h2 fw-400 color-01 lh-xs color-theme-black">
											องค์กรที่เป็นเลิศ <br> 
											<span class="h4 lg fw-400 lh-xs">ในการรับรองมาตรฐาน</span>
											<div class="quote-left">
												<svg 
													xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
													width="26px" height="19px"
												>
													<path 
														fill-rule="evenodd" fill="rgb(160, 10, 37)" 
														d="M15.202,8.062 L15.202,0.001 L25.843,0.001 L25.843,18.982 C19.990,18.982 15.202,14.068 15.202,8.062 ZM-0.000,8.062 L-0.000,0.001 L10.641,0.001 L10.641,18.982 C4.788,18.982 -0.000,14.068 -0.000,8.062 Z" 
													/>
												</svg>
											</div>
										</div>
									</div>
									<div class="quote-container animate mt-2" style="--delay:.75s;">
										<div class="p lg fw-400 color-01 color-theme-black">
											การศึกษาในระดับชาติและนานาชาติ
											<div class="quote-right">
												<svg 
													xmlns="http://www.w3.org/2000/svg"
													xmlns:xlink="http://www.w3.org/1999/xlink"
													width="26px" height="19px"
												>
													<path 
														fill-rule="evenodd" fill="rgb(160, 10, 37)" 
														d="M15.293,19.003 L15.293,0.022 L26.000,0.022 L26.000,8.082 C26.000,14.088 21.182,19.003 15.293,19.003 ZM-0.001,19.003 L-0.001,0.022 L10.705,0.022 L10.705,8.082 C10.705,14.088 5.887,19.003 -0.001,19.003 Z" 
													/>
												</svg>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php }?>
			</div>
		</div>
		<div class="bottom-panel">
			<div class="preview-container">
				<div class="slides">
					<?php for($i=0; $i<6; $i++){?>
						<div class="slide">
							<div class="preview-wrapper">
								<div class="img-bg img-theme" style="background-image:url('public/assets/app/img/content/banner-preview-01.jpg');"></div>
							</div>
						</div>
					<?php }?>
				</div>
			</div>
		</div>
	</section>

	<section class="content-03 color-theme-black" data-counter="1">
		<div class="section-padding pos-relative">
			<div class="bg-content img-theme" style="background-image:url('public/assets/app/img/bg/content-01.jpg');"></div>
			<div class="container pos-relative">
				<div data-aos="fade-up" data-aos-delay="0">
					<h6 class="h2 fw-400">
						สมศ.ยุคใหม่
					</h6>
					<p class="lg xs-no-br mt-1">
						เพื่อการประเมินคุณภาพภายนอก <br>
						ที่ได้มาตรฐาน
					</p>
				</div>
				<div class="content-container" data-aos="fade-up" data-aos-delay="150">
					<div class="tab-container">
						<div class="tabs tabs-02">
							<?php 
								foreach([
									'ความก้าวหน้า<br>การประเมินคุณภาพ<br>ภายนอก',
									'สถานศึกษา / <br>สถาบันอุดมศึกษา <br>และต้นสังกัด',
									'ผู้ประเมิน<br>ภายนอก',
									'หน่วยกำกับ<br>การประเมิน/ผู้กำกับ<br>การประเมิน'
								] as $i=>$d){
							?>
								<div class="tab <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
									<div class="wrapper">
										<img class="img-pattern" src="public/assets/app/img/hero/card-pattern-0<?= $i+1 ?>.png" alt="Pattern" />
										<div class="text-container">
											<p class="xs fw-300"><?= $d ?></p>
										</div>
									</div>
								</div>
							<?php }?>
						</div>
						<div class="tab-contents">
							<?php foreach([1, 2, 3, 4] as $i=>$d){?>
								<div class="tab-content <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
									<div class="panels">
										<div class="panel-left">
											<ul class="ss-list color-theme-black">
												<?php 
													foreach([
														'กฎหมายที่เกี่ยวข้อง', 'ศูนย์พัฒนาเด็ก', 'การศึกษาขั้นพื้นฐาน',
														'การศึกษาขั้นพื้นฐานวัตถุประสงค์พิเศษ', 'กศน.', 'ด้านการอาชีวศึกษา',
														'ระดับอุดมศึกษา'
													] as $j=>$k){
												?>
													<li class="subtab <?php if($j==0)echo 'active'; ?>" data-subtab="<?= $i.'_'.$j ?>">
														<p class="sm fw-400 color-theme-black">
															<?= $k ?>
														</p>
													</li>
												<?php }?>
											</ul>
										</div>
										<div class="panel-right">
											<div class="subtab-contents">
												<?php 
													foreach([
														'กฎหมายที่เกี่ยวข้อง', 'ศูนย์พัฒนาเด็ก', 'การศึกษาขั้นพื้นฐาน',
														'การศึกษาขั้นพื้นฐานวัตถุประสงค์พิเศษ', 'กศน.', 'ด้านการอาชีวศึกษา',
														'ระดับอุดมศึกษา'
													] as $j=>$k){
												?>
													<div class="subtab-content <?php if($j==0)echo 'active'; ?>" data-subtab="<?= $i.'_'.$j ?>">
														<div class="d-flex ai-center fw-wrap">
															<?php foreach([ 'ประกาศ', 'เครื่องมือ/คู่มือ', 'ผลประเมินภายนอก' ] as $n=>$m){?>
																<?php if($n>0){?>
																	<div class="v-line ml-3 mr-3"></div>
																<?php }?>
																<a 
																	class="p sm fw-500 xtab <?php if($n==0)echo 'active'; ?>" 
																	data-xtab="<?= $i.'_'.$j.'_'.$n ?>" href="#" 
																>
																	<?= $m ?>
																</a>
															<?php }?>
														</div>
														<div class="xtab-contents mt-6">
															<?php foreach([ 'ประกาศ', 'เครื่องมือ/คู่มือ', 'ผลประเมินภายนอก' ] as $n=>$m){?>
																<div 
																	class="xtab-content <?php if($n==0)echo 'active'; ?>" 
																	data-xtab="<?= $i.'_'.$j.'_'.$n ?>" 
																>
																	<div class="d-flex">
																		<div class="icon">
																			<img 
																				class="img-theme" width="36" 
																				src="public/assets/app/img/file/pdf.svg" alt="File Icon" 
																			/>
																		</div>
																		<div class="pl-4">
																			<a class="p xl fw-600 font-02 lh-nm color-black h-color-01 color-theme-black" href="#">
																				ประกาศที่ 353/2564
																			</a>
																			<p class="p lg fw-500 font-02 lh-nm">
																				การปรับจำนวนผู้ประเมินภายนอกสำหรับการประเมินคุณภาพภายนอกสถานศึกษา 
																				การศึกษาปฐมวัย (ศูนย์พัฒนาเด็ก) และ สถานศึกษาระดับการศึกษาขั้นพื้นฐาน
																			</p>
																		</div>
																	</div>
																</div>
															<?php }?>
														</div>
														<div class="mt-6 pt-2" style="padding-left:3.25rem;">
															<a class="btn-more color-gray h-color-01 color-theme-black" href="#">
																<p class="fw-400">ดูทั้งหมด</p> 
																<div class="icon">
																	<em class="zmdi zmdi-long-arrow-right"></em>
																</div>
															</a>
														</div>
													</div>
												<?php }?>
											</div>
										</div>
									</div>
								</div>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ss-pattern-bottom gray"></div>
	</section>

	<section class="content-01 section-padding" data-counter="2">
		<div class="container">
			<div class="tab-container">
				<div class="content-options">
					<div class="content-option" data-aos="fade-up" data-aos-delay="0">
						<h6 class="h4 fw-400 color-01">
							สื่อสารองค์กร
						</h6>
						<p class="fw-400">
							อัพเดทข้อมูลข่าวประชาสัมพันธ์เกี่ยวกับหน่วยงาน
						</p>
					</div>
					<div class="content-option" data-aos="fade-up" data-aos-delay="150">
						<div class="tabs tabs-01">
							<?php foreach(['ประชาสัมพันธ์', 'ประกาศ', 'ภาพกิจกรรม', 'ประกาศรับสมัครงาน'] as $i=>$d){?>
								<div class="tab <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
									<div class="text"><?= $d ?></div>
									<?php if($i==3){?>
										<div class="icon-new">ใหม่</div>
									<?php }?>
								</div>
							<?php }?>
						</div>
					</div>
				</div>
				<div class="tab-contents" data-aos="fade-up" data-aos-delay="300">
					<?php foreach(['ประชาสัมพันธ์', 'ประกาศ', 'ภาพกิจกรรม', 'ประกาศรับสมัครงาน'] as $i=>$d){?>
						<div class="tab-content <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
							<div class="slide-container">
								<div class="slides">
									<?php for($j=0; $j<7; $j++){?>
										<div class="slide">
											<div class="ss-card ss-card-01">
												<div class="ss-date">
													<div class="wrapper">
														<div class="date">24</div>
														<div class="month">ส.ค.64</div>
													</div>
												</div>
												<div class="text-container">
													<p class="header fw-400">
														<?= $d ?>
														<?php if($j<3){?>
															<span class="color-04">(ใหม่)</span>
														<?php }?>
													</p>
													<a class="title p xl fw-600 font-02 lh-nm" href="#">
														ประกาศที่ 610/2564
													</a>
													<p class="desc p lg fw-500 font-02 lh-nm">
														เปลี่ยนแปลงรายชื่อผู้ประเมินภายนอก สถานศึกษาอาชีวศึกษาที่รับการประเมินคุณภาพภายนอกระยะที่ 2 
														การตรวจเยี่ยมผ่านระบบวิธีการทางอิเล็กทรอนิกส์ปรเะจำปีงบประมาณ พ.ศ.2564 ภายใต้สถานการณ์ 
														COVID-19 ครั้งที่ 4/2564 (2/2564)จำปีงบประมาณ พ.ศ.2564 ภายใต้สถานการณ์ COVID-19
													</p>
												</div>
												<div class="card-footer">
													<div class="wrapper">
														<a class="btn-more p xxs fw-400" href="#">อ่านเพิ่มเติม</a>
														<div class="card-stats">
															<div class="card-stat">
																<div class="icon"><em class="fas fa-eye"></em></div>
																<p class="xxs fw-400">108</p>
															</div>
															<div class="card-stat">
																<div class="icon"><em class="fas fa-share-alt"></em></div> 
																<p class="xxs fw-400">20</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php }?>
								</div>
								<div class="dots"></div>
							</div>
						</div>
					<?php }?>
				</div>
			</div>
		</div>
	</section>

	<section class="info-01">
		<div class="container">
			<div class="blocks">
				<div class="block block-left">
					<div class="img-bg"></div>
					<div class="text-container">
						<h6 class="h4 fw-400 md-no-br" data-aos="fade-up" data-aos-delay="0">
							ทันโลก มีมาตรฐาน <br>
							บริการรวดเร็ว
						</h6>
						<p class="xs-no-br mt-3" data-aos="fade-up" data-aos-delay="150">
							เท่าทันการเปลี่ยนแปลงด้านการประเมินคุณภาพของ <br>
							สังคมโลกดำเนินงานเป็นไปตามข้อกำหนดที่ <br>
							ได้รับการยอมรับ ทั้งในเชิงปริมาณและคุณภาพ <br>
							ส่งมอบรายงานผลการตรวจประเมินที่มีคุณค่า <br>
							ให้กับผู้รับบริการและผู้มีส่วนเกี่ยวข้องได้ <br>
							อย่างรวดเร็ว แม่นยำ
						</p>
					</div>
				</div>
				<div class="block block-right">
					<div class="img-bg img-theme" style="background-image:url('public/assets/app/img/bg/info-01.jpg');"></div>
				</div>
			</div>
		</div>
	</section>

	<section class="content-02 section-padding" data-counter="3">
		<div class="container">
			<div class="tab-container">
				<div class="content-options">
					<div class="content-option" data-aos="fade-up" data-aos-delay="0">
						<h6 class="h4 fw-400 color-01">
							คลังความรู้
						</h6>
						<p class="fw-400">
							อัพเดทข้อมูลข่าวประชาสัมพันธ์เกี่ยวกับหน่วยงาน
						</p>
					</div>
					<div class="content-option" data-aos="fade-up" data-aos-delay="150">
						<div class="tabs tabs-01">
							<?php foreach(['มัลติมีเดีย', 'อินโฟกราฟิก', 'ประชุมสัมมนา', 'ผลประเมินภายนอก'] as $i=>$d){?>
								<div class="tab <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
									<div class="text"><?= $d ?></div>
								</div>
							<?php }?>
						</div>
					</div>
				</div>
				<div class="tab-contents" data-aos="fade-up" data-aos-delay="300">
					<?php foreach(['ประชาสัมพันธ์', 'ประกาศ', 'ภาพกิจกรรม', 'ประกาศรับสมัครงาน'] as $i=>$d){?>
						<div class="tab-content <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
							<div class="slide-container">
								<div class="slides">
									<?php for($j=0; $j<7; $j++){?>
										<div class="slide">
											<div class="ss-card ss-card-02">
												<div class="img-container">
													<div class="ss-img adaptive-card-02">
														<div class="img-bg img-theme" style="background-image:url('public/assets/app/img/content/media-0<?= $j%3+1 ?>.jpg');"></div>
														<div class="hover-container">
															<a class="icon" href="#">
																<em class="fab fa-youtube"></em>
															</a>
														</div>
													</div>
												</div>
												<div class="text-container">
													<div class="bg-pattern">
														<svg 
															xmlns="http://www.w3.org/2000/svg"
															xmlns:xlink="http://www.w3.org/1999/xlink"
															width="453px" height="338px"
														>
															<path fill-rule="evenodd" opacity="0.161" fill="rgb(255, 255, 255)" 
																d="M106.165,165.340 C81.741,197.333 71.996,227.887 83.712,246.862 C97.027,268.428 134.794,271.153 182.256,258.104 C217.349,248.456 257.371,230.380 297.842,204.725 C363.199,163.294 411.409,112.723 427.599,73.073 C431.332,63.931 434.118,51.280 432.608,38.888 C431.355,28.605 427.658,19.856 418.124,12.333 C425.515,38.291 409.384,70.258 374.214,109.602 C353.271,135.003 322.423,161.815 285.153,185.331 C261.078,200.521 236.988,213.605 214.403,222.642 C158.561,244.985 111.919,246.577 97.438,223.233 C89.014,209.653 93.082,188.506 106.165,165.340 L106.165,165.340 ZM174.945,224.861 C170.605,226.035 166.231,227.095 161.828,228.044 C161.311,227.027 160.791,226.011 160.266,224.994 C128.341,163.170 80.935,101.450 44.000,65.384 C53.080,63.563 62.603,63.767 68.673,66.580 C107.622,108.930 140.554,158.400 172.505,220.119 C173.319,221.692 174.132,223.273 174.945,224.861 L174.945,224.861 ZM198.611,217.233 C193.800,219.042 188.934,220.709 184.020,222.231 C183.154,220.346 182.277,218.463 181.390,216.580 C148.178,146.123 99.764,77.289 50.042,33.207 C62.722,32.566 72.864,33.707 80.469,36.631 C125.092,85.148 163.315,142.445 195.651,210.901 C196.643,213.001 197.630,215.112 198.611,217.233 L198.611,217.233 ZM111.861,24.415 C152.770,67.733 190.605,125.951 225.366,199.065 C226.171,200.759 226.975,202.459 227.777,204.169 C221.445,207.487 214.983,210.541 208.407,213.323 C207.490,211.186 206.563,209.055 205.623,206.929 C172.797,132.667 126.279,64.798 67.357,3.320 C134.747,1.478 191.028,16.478 236.202,48.319 C242.882,43.538 250.724,38.700 259.726,33.807 C282.139,21.622 315.011,7.630 346.431,2.338 C360.947,-0.107 376.426,-0.977 389.122,1.332 C402.212,3.715 409.012,8.627 411.796,15.848 C416.237,27.368 409.405,44.779 402.557,59.085 C405.988,48.710 405.809,41.154 403.270,35.561 C400.998,30.557 396.915,27.590 391.815,25.448 C379.178,20.141 360.363,22.251 346.237,24.828 C310.995,31.258 275.277,47.278 236.202,76.713 C198.095,45.283 156.648,27.851 111.861,24.415 Z" />
														</svg>
													</div>
													<div class="pos-relative">
														<p class="date-text sm fw-400">
															14 พ.ค. 64
														</p>
														<a class="desc p lg fw-600 font-02 lh-nm mt-3" href="#">
															Onesqa next ขยับระดับการศึกษาไทย ตอนที่ 1 เรื่อง 
															การประเมินคุณภาพคุณภาพภายนอกแบบออนไลน์ ของ สมศ.
														</a>
													</div>
													<div class="card-footer">
														<div class="wrapper">
															<a class="btn-more p xxs fw-400" href="#">อ่านเพิ่มเติม</a>
															<div class="card-stats">
																<div class="card-stat">
																	<div class="icon"><em class="fas fa-eye"></em></div>
																	<p class="xxs fw-400">108</p>
																</div>
																<div class="card-stat">
																	<div class="icon"><em class="fas fa-share-alt"></em></div> 
																	<p class="xxs fw-400">20</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php }?>
								</div>
								<div class="dots dots-red"></div>
								<div class="arrows">
									<div class="wrapper">
										<a class="p sm fw-400 color-gray h-color-04 mr-3" href="#">
											ดูทั้งหมด
										</a>
										<a class="arrow arrow-prev" href="#">
											<em class="zmdi zmdi-long-arrow-left"></em>
										</a>
										<div class="arrow-sep ml-2 mr-2"></div>
										<a class="arrow arrow-next" href="#">
											<em class="zmdi zmdi-long-arrow-right"></em>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php }?>
				</div>
			</div>
		</div>
	</section>

	<div class="section-counter">
		<div class="wrapper">
			<div class="counter"><div class="text">ส่วนหลัก</div></div>
			<div class="counter"><div class="text">การประเมินภายนอก</div></div>
			<div class="counter"><div class="text">สื่อสารองค์กร</div></div>
			<div class="counter"><div class="text">คลังความรู้</div></div>
		</div>
	</div>
	
	<?php include_once('include/footer.php'); ?>
	<?php include_once('include/script.php'); ?>
</body>
</html>
