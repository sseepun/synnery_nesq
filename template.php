<!DOCTYPE html>
<html lang="th">
<head>
	<?php include_once('include/header.php'); ?>
	<?php include_once('include/style.php'); ?>
</head>
<body class="loading">
	<?php include_once('include/topnav.php'); ?>
	<?php
		$breadcrumb = [
			'class' => null,
			'bg' => 'public/assets/app/img/bg/breadcrumb-11.jpg',
			'title' => 'คลังภาพ',
			'structure' => [
				[ 'url' => '#', 'text' => 'หน้าแรก' ],
				[ 'url' => '#', 'text' => 'ข่าวสาร/ประกาศ' ],
				[ 'url' => '#', 'text' => 'คลังภาพ' ],
			]
		];
		include('component/breadcrumb.php');
	?>

	<!-- Start Here -->
	
	<?php include_once('include/footer.php'); ?>
	<?php include_once('include/script.php'); ?>
</body>
</html>
