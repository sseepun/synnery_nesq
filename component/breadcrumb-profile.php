<?php if(!empty($breadcrumb)){?>
	<section class="breadcrumb-01 style-profile <?= isset($breadcrumb['class'])? $breadcrumb['class']: '' ?>">
		<div class="img-bg img-theme" style="background-image:url('<?= $breadcrumb['bg'] ?>');"></div>
		<div class="container">
			<div class="structure">
				<?php foreach($breadcrumb['structure'] as $j=>$d){?>
					<?php if($j > 0){?>
						<div class="icon"><em class="zmdi zmdi-chevron-right"></em></div>
					<?php }?>
					<a href="<?= $d['url'] ?>" class="<?= sizeof($breadcrumb['structure'])==$j+1? 'fw-600': '' ?>">
						<?= $d['text'] ?>
					</a>
				<?php }?>
			</div>
			<div class="wrapper" data-aos="fade-up" data-aos-delay="0">
				<div class="profile">
					<div class="img-bg" style="background-image:url('<?= $breadcrumb['profile'] ?>');"></div>
					<div class="icon-upload">
						<img src="public/assets/app/img/icon/upload.svg" alt="Image Icon" />
						<input type="file" accept="image/x-png,image/jpeg,image/jpg" />
					</div>
				</div>
				<div class="text-center mt-2">
					<h6 class="h5 fw-300 lh-xs"><?= $breadcrumb['name'] ?></h6>
					<p class="lg fw-200 lh-xs"><?= $breadcrumb['email'] ?></p>
					<div class="mt-2">
						<a class="btn p sm fw-200 color-white h-color-01" href="#">
							<em class="fas fa-sign-out-alt mr-1"></em> ออกจากระบบ
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php }?>
