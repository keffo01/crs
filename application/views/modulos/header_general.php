<nav class="navbar header-navbar pcoded-header">
	<div class="navbar-wrapper">

		<div class="navbar-logo">
			
			<a href="<?=base_url();?>">
				<img class="img-fluid" src="<?=base_url();?>\files\assets\images\auth\logo-b.png" alt="Theme-Logo">
			</a>
			<a class="mobile-options">
				<i class="feather icon-more-horizontal"></i>
			</a>
		</div>

		<div class="navbar-container container-fluid">

			<ul class="nav-right">
				<li class="header-notification">
					<a href=""><span class="nav-letra">Inicio</span></a>
				</li>
				<li class="header-notification">
					<div class="dropdown-primary dropdown li-lista-header-general">
						<div class="dropdown-toggle" data-toggle="dropdown">

							<span class="nav-letra">Nosotros</span>
							<i class="feather icon-chevron-down"></i>
						</div>
						<ul class="show-notification profile-notification dropdown-menu ">
							<li>
								<a href="javascript:void(0)">
									 Historia
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
								Mensajes del Presindente
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
								Estructura organizativa
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
								Directores y jefes
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
								Consejo ejecutivo
								</a>
							</li>
						</ul>

					</div>
				</li>
				<li class="header-notification">
					<a href="javascript:void(0)"><span class="nav-letra">Ayuda</span></a>
				</li>
				<li class="header-notification">
					<a href="javascript:void(0)"><span class="nav-letra">Servicios</span></a>
				</li>
				<li class="header-notification">
					<div class="dropdown-primary dropdown li-lista-header-general">
						<div class="dropdown-toggle" data-toggle="dropdown">

							<span class="nav-letra">Plan Estratégico</span>
							<i class="feather icon-chevron-down"></i>
						</div>
						<ul class="show-notification profile-notification dropdown-menu ">
							<li>
								<a href="javascript:void(0)">
								Áreas programáticas
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
								Áreas transversales
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
								Sistema mediático
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
								Sistema de monitoreo
								</a>
							</li>
							
						</ul>

					</div>
				</li>
				<li class="header-notification">
					<a href="javascript:void(0)"><span class="nav-letra">Noticias</span></a>
				</li>
				
				

			</ul>
			<ul class="nav-left">
			<li>
					<a href="javascript:void(0)" onclick="launchFullScreen(document.documentElement);">
						<i class="feather icon-maximize full-screen"></i>
					</a>
				</li>
				<li class="header-search">
					<div class="main-search morphsearch-search">
						<div class="input-group">
							<span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
							<input type="text" class="form-control">
							<span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
						</div>
					</div>
				</li>

			</ul>

		</div>
	</div>
</nav>
<!-- CHATS -->
<!-- Sidebar chat start -->
<!--<div id="sidebar" class="users p-chat-user showChat">
	<div class="had-container">
		<div class="card card_main p-fixed users-main">
			<div class="user-box">
				<div class="chat-inner-header">
					<div class="back_chatBox">
						<div class="right-icon-control">
							<input type="text" class="form-control  search-text" placeholder="Search Friend"
								id="search-friends">
							<div class="form-icon">
								<i class="icofont icofont-search"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="main-friend-list">
					<div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe"
						data-toggle="tooltip" data-placement="left" title="Josephin Doe">
						<a class="media-left" href="#!">
							<img class="media-object img-radius img-radius"
								src="<?=base_url();?>\files\assets\images\avatar-3.jpg"
								alt="Generic placeholder image ">
							<div class="live-status bg-success"></div>
						</a>
						<div class="media-body">
							<div class="f-13 chat-header">Josephin Doe</div>
						</div>
					</div>
					<div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe"
						data-toggle="tooltip" data-placement="left" title="Lary Doe">
						<a class="media-left" href="#!">
							<img class="media-object img-radius" src="<?=base_url();?>\files\assets\images\avatar-2.jpg"
								alt="Generic placeholder image">
							<div class="live-status bg-success"></div>
						</a>
						<div class="media-body">
							<div class="f-13 chat-header">Lary Doe</div>
						</div>
					</div>
					<div class="media userlist-box" data-id="3" data-status="online" data-username="Alice"
						data-toggle="tooltip" data-placement="left" title="Alice">
						<a class="media-left" href="#!">
							<img class="media-object img-radius" src="<?=base_url();?>\files\assets\images\avatar-4.jpg"
								alt="Generic placeholder image">
							<div class="live-status bg-success"></div>
						</a>
						<div class="media-body">
							<div class="f-13 chat-header">Alice</div>
						</div>
					</div>
					<div class="media userlist-box" data-id="4" data-status="online" data-username="Alia"
						data-toggle="tooltip" data-placement="left" title="Alia">
						<a class="media-left" href="#!">
							<img class="media-object img-radius" src="<?=base_url();?>\files\assets\images\avatar-3.jpg"
								alt="Generic placeholder image">
							<div class="live-status bg-success"></div>
						</a>
						<div class="media-body">
							<div class="f-13 chat-header">Alia</div>
						</div>
					</div>
					<div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen"
						data-toggle="tooltip" data-placement="left" title="Suzen">
						<a class="media-left" href="#!">
							<img class="media-object img-radius" src="<?=base_url();?>\files\assets\images\avatar-2.jpg"
								alt="Generic placeholder image">
							<div class="live-status bg-success"></div>
						</a>
						<div class="media-body">
							<div class="f-13 chat-header">Suzen</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 Sidebar inner chat start
<div class="showChat_inner">
	<div class="media chat-inner-header">
		<a class="back_chatBox">
			<i class="feather icon-chevron-left"></i> Josephin Doe
		</a>
	</div>
	<div class="media chat-messages">
		<a class="media-left photo-table" href="#!">
			<img class="media-object img-radius img-radius m-t-5"
				src="<?=base_url();?>\files\assets\images\avatar-3.jpg" alt="Generic placeholder image">
		</a>
		<div class="media-body chat-menu-content">
			<div class="">
				<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
				<p class="chat-time">8:20 a.m.</p>
			</div>
		</div>
	</div>
	<div class="media chat-messages">
		<div class="media-body chat-menu-reply">
			<div class="">
				<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
				<p class="chat-time">8:20 a.m.</p>
			</div>
		</div>
		<div class="media-right photo-table">
			<a href="#!">
				<img class="media-object img-radius img-radius m-t-5"
					src="<?=base_url();?>\files\assets\images\avatar-4.jpg" alt="Generic placeholder image">
			</a>
		</div>
	</div>
	<div class="chat-reply-box p-b-20">
		<div class="right-icon-control">
			<input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
			<div class="form-icon">
				<i class="feather icon-navigation"></i>
			</div>
		</div>
	</div>
</div> -->

</div>
