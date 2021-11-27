<?php if(!empty($breadcrumb)){?>
	<section class="breadcrumb-01 <?= isset($breadcrumb['class'])? $breadcrumb['class']: '' ?>">
		<?php if(!empty($breadcrumb['bg'])){?>
			<div class="img-bg img-theme" style="background-image:url('<?= $breadcrumb['bg'] ?>');"></div>
		<?php }?>
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
			<div class="wrapper">
				<p class="title h1 fw-600" data-aos="fade-up" data-aos-delay="0">
					<?= $breadcrumb['title'] ?>
				</p>
			</div>
		</div>
	</section>
<?php }?>
