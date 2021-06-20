<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head> 
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Sistema Informatico" name=<?= $data['page_descripcion']; ?>>
		<meta content="Alvaro Pacheco" name="author">
	 
		<!-- Title -->
		<title><?= $data['page_title']; ?></title> 
		<!--Favicon -->
		<link rel="icon" href="<?php echo recursos() ?>/images/brand/favicon.ico" type="image/x-icon"/>

		<!-- Bootstrap css -->
		<link href="<?php echo recursos() ?>/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />

		<!-- Style css -->
		<link href="<?php echo recursos() ?>/css/style.css" rel="stylesheet" />

		<!-- Dark css -->
		<link href="<?php echo recursos() ?>/css/dark.css" rel="stylesheet" />

		<!-- Skins css -->
		<link href="<?php echo recursos() ?>/css/skins.css" rel="stylesheet" />

		<!-- Animate css -->
		<link href="<?php echo recursos() ?>/css/animated.css" rel="stylesheet" />

		<!--Sidemenu css -->
        <link href="<?php echo recursos() ?>/css/sidemenu.css" rel="stylesheet">

		<!-- P-scroll bar css-->
		<link href="<?php echo recursos() ?>/plugins/p-scrollbar/p-scrollbar.css" rel="stylesheet" />

		<!---Icons css-->
		<link href="<?php echo recursos() ?>/css/icons.css" rel="stylesheet" />

		<!-- INTERNAl Select2 css -->
		<link href="<?php echo recursos() ?>/plugins/select2/select2.min.css" rel="stylesheet" />

		<!-- INTERNAL Morris Charts css -->
		<link href="<?php echo recursos() ?>/plugins/morris/morris.css" rel="stylesheet" />

		<!-- INTERNAL Data table css -->
		<link href="<?php echo recursos() ?>/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />

		<!--- INTERNAL Sweetalert css-->
		<link href="<?php echo recursos() ?>/plugins/sweet-alert/jquery.sweet-modal.min.css" rel="stylesheet" />
		<link href="<?php echo recursos() ?>/plugins/sweet-alert/sweetalert.css" rel="stylesheet" />
	</head>
	<body class="app sidebar-mini dark-mode"> 
		<!---Global-loader-->
		<div id="global-loader" >
			<img src="<?php echo recursos() ?>/images/svgs/loader.svg" alt="loader">
		</div>
		<!---/Global-loader--> 
		<div class="page">
			<div class="page-main">  
				<?= asideAdmin(); ?>	 
				<div class="app-content">
					<div class="side-app">  
						<?= appheaderAdmin(); ?>	 
						 