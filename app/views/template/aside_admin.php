<!--aside open-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar">
					<div class="app-sidebar__logo">
						<a class="header-brand" href="<?= BASE_URL?>home">
							<img src="<?php echo recursos() ?>/images/brand/logo.png" class="header-brand-img desktop-lgo" alt="Covido logo">
							<img src="<?php echo recursos() ?>/images/brand/logo2.png" class="header-brand-img dark-logo" alt="Covido logo">
							<img src="<?php echo recursos() ?>/images/brand/favicon.png" class="header-brand-img mobile-logo" alt="Covido logo">
							<img src="<?php echo recursos() ?>/images/brand/favicon1.png" class="header-brand-img darkmobile-logo" alt="Covido logo">
						</a>
					</div>
					<div class="app-sidebar3">
						<div class="app-sidebar__user">
							<div class="dropdown user-pro-body text-center">
								<div class="user-pic">
									<img src="<?php echo recursos() ?>/images/users/14.jpg" alt="user-img" class="avatar-xl rounded-circle mb-1">
								</div>
								<div class="user-info">
									<h5 class=" mb-0 font-weight-normal">Logan Oliver</h5>
									<span class="text-muted app-sidebar__user-name text-sm">Manage Director</span>
								</div>
							</div>
						</div>
						<ul class="side-menu">
							<li><h3>Inicio</h3></li>
							<li class="slide">
								<a class="side-menu__item"   href="<?= BASE_URL?>home">
									<span class="shape1"></span>
									<span class="shape2"></span>
									<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
									<span class="side-menu__label">Panel informativo</span>
								</a>
							</li>
							<li><h3>Configuracion</h3></li>
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="#">
								<span class="shape1"></span>
								<span class="shape2"></span>
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
								<span class="side-menu__label">Usuarios</span><i class="angle fa fa-angle-right"></i></a>
								<ul class="slide-menu">
									<li><a href="<?= BASE_URL?>usuarios" class="slide-item">Usuario</a></li>
									<li><a href="<?= BASE_URL?>roles" class="slide-item">Roles</a></li>
									<li><a href="<?= BASE_URL?>permisos" class="slide-item">Permisos</a></li>
								</ul>
							</li>
							 
						</ul>
					</div>
				</aside>
				<!--aside closed-->