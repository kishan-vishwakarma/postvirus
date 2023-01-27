<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="Dashboard">
	<meta name="Author" content="NIC Durg">
	<meta name="Keywords"
		content="admin template, admin dashboard, bootstrap dashboard template, bootstrap 4 admin template, laravel, php framework, php laravel, laravel framework, php mvc, laravel admin panel, laravel admin panel, laravel template, laravel bootstrap, blade laravel, best php framework" />

	<!-- Title -->
	<title> {{ $title }}</title>

	<!-- Favicon -->
	<link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon" />

	<!-- Bootstrap css -->
	<link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />

	<!-- Icons css -->
	<link href="assets/plugins/icons/icons.css" rel="stylesheet">

	<!--  Right-sidemenu css -->
	<link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

	<!--  Left-Sidebar css -->
	<link rel="stylesheet" href="assets/css/sidemenu.css">

	<!--- Dashboard-2 css-->
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/style-dark.css" rel="stylesheet">

	<!--- Color css-->
	<link id="theme" href="assets/css/colors/color.css" rel="stylesheet">



	<!-- Internal Data table css -->
	<link href="assets/plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
	<link href="assets/plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet">
	<link href="assets/plugins/datatable/css/responsive.bootstrap4.min.css" rel="stylesheet" />
	<link href="assets/plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="assets/plugins/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
	<link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet">


	<!---Skinmodes css-->
	<link href="assets/css/skin-modes.css" rel="stylesheet" />

	<!--- Animations css-->
	<link href="assets/css/animate.css" rel="stylesheet">

	<!---Switcher css-->
	<link href="assets/switcher/css/switcher.css" rel="stylesheet">
	<link href="assets/switcher/demo.css" rel="stylesheet">

</head>

<body class="main-body light-theme app sidebar-mini active leftmenu-color">

	<!-- Start Switcher -->
	<div class="switcher-wrapper ">
		<div class="demo_changer">
			<div class="demo-icon">
				<a class="bg-primary-transparent active" title="Themes"><i class="fa fa-cog fa-spin text-primary"></i></a>
			</div>
			<div class="form_holder sidebar-right1">
				<div class="tabs-menu">
					<ul class="nav panel-tabs">
						<li><a class="active" title="Themes" href="#switcher1" data-toggle="tab"><i class="fe fe-droplet mr-1"></i>
								Themes</a></li>
					</ul>
				</div>
				<div class="tab-content">
					<div class="tab-pane active" id="switcher1">
						<div class="row">
							<div class="predefined_styles">
								<div class="swichermainleft border-top  mt-2 text-center">
									<div class="p-3">
										<a href="index.html" class="btn btn-primary btn-block mt-0">LTR VERSION</a>
										<a href="#" class="btn btn-success btn-block ">RTL VERSION</a>
									</div>
								</div>
								<div class="swichermainleft border-top  mt-2 text-center">
									<div class="p-3">
										<a href="#" class="btn btn-primary btn-block mt-0">View Demo</a>
										<a href="#" class="btn btn-secondary btn-block">Buy Now</a>
										<a href="#" class="btn btn-success btn-block">Our Portfolio</a>
									</div>
								</div>
								<div class="swichermainleft">
									<h4>Body Skins</h4>
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="mr-auto">Default Body</span>
											<div class="onoffswitch2"><input type="radio" name="onoffswitch" id="myonoffswitch7"
													class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch7" class="onoffswitch2-label"></label>
											</div>
										</div>
										<div class="switch-toggle d-flex">
											<span class="mr-auto">Body Style1</span>
											<div class="onoffswitch2"><input type="radio" name="onoffswitch" id="myonoffswitch6"
													class="onoffswitch2-checkbox">
												<label for="myonoffswitch6" class="onoffswitch2-label"></label>
											</div>
										</div>
									</div>
								</div>
								<div class="swichermainleft">
									<h4>Leftmenu Styles</h4>
									<div class="switch_section">
										<div class="switch-toggle horizontal-light-switcher d-flex">
											<span class="mr-auto">Leftmenu Light</span>
											<div class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch9"
													class="onoffswitch2-checkbox">
												<label for="myonoffswitch9" class="onoffswitch2-label"></label>
											</div>
										</div>
										<div class="switch-toggle d-flex">
											<span class="mr-auto">Leftmenu Color</span>
											<div class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch10"
													class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch10" class="onoffswitch2-label"></label>
											</div>
										</div>
										<div class="switch-toggle horizontal-Dark-switcher d-flex">
											<span class="mr-auto">Leftmenu Dark</span>
											<div class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch11"
													class="onoffswitch2-checkbox">
												<label for="myonoffswitch11" class="onoffswitch2-label"></label>
											</div>
										</div>
										<div class="switch-toggle d-flex">
											<span class="mr-auto">Reset Leftmenu Styles</span>
											<div class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch13"
													class="onoffswitch2-checkbox">
												<label for="myonoffswitch13" class="onoffswitch2-label"></label>
											</div>
										</div>
									</div>
								</div>
								<div class="swichermainleft">
									<h4>Color Skins</h4>
									<div class="skin-body">
										<a class="wscolorcode1 blackborder color1" data-theme="assets/css/colors/color.css" href="#"></a>
										<a class="wscolorcode1 blackborder color2" data-theme="assets/css/colors/color2.css" href="#"></a>
										<a class="wscolorcode1 blackborder color3" data-theme="assets/css/colors/color3.css" href="#"></a>
										<a class="wscolorcode1 blackborder color4" data-theme="assets/css/colors/color4.css" href="#"></a>
										<a class="wscolorcode1 blackborder color5" data-theme="assets/css/colors/color5.css" href="#"></a>
										<a class="wscolorcode1 blackborder color6" data-theme="assets/css/colors/color6.css" href="#"></a>
									</div>
								</div>
								<div class="swichermainleft">
									<h4>Skin Modes</h4>
									<div class="skin-body light-pattern">
										<a class="" href="#"><img class="theme-image1 mb-3" id="myonoffswitchimg1"
												src="assets/switcher/images/themes/1.jpg" alt="img"></a>
										<a class="" href="#"><img class="theme-image1 mb-3" id="myonoffswitchimg2"
												src="assets/switcher/images/themes/2.jpg" alt="img"></a>
									</div>
								</div>
								<div class="swichermainleft">
									<h4>Navigation</h4>
									<div class="skin-body light-pattern">
										<p class="font-weight-semibold">Leftmenu Navigation</p>
										<a class="" href="vertical.html"><img class="theme-image1 mb-3"
												src="assets/switcher/images/themes/3.jpg" alt="img"></a>
										<p class="font-weight-semibold mt-4">Horizontal Navigation</p>
										<a class="" href="horizontal.html"><img class="theme-image1 mb-3"
												src="assets/switcher/images/themes/1.jpg" alt="img"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Switcher -->

	<!-- Loader -->
	<div id="global-loader">
		<img src="assets/img/loader-2.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /Loader -->

	<!-- main-sidebar -->
	<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
	<aside class="app-sidebar">
		<div class="main-sidebar-header active">
			<a class="desktop-logo logo-light active" href="index.html">
				<img src="assets/img/brand/logo.png" class="main-logo logo-color1" alt="logo">
				<img src="assets/img/brand/logo2.png" class="main-logo logo-color2" alt="logo">
				<img src="assets/img/brand/logo3.png" class="main-logo logo-color3" alt="logo">
				<img src="assets/img/brand/logo4.png" class="main-logo logo-color4" alt="logo">
				<img src="assets/img/brand/logo5.png" class="main-logo logo-color5" alt="logo">
				<img src="assets/img/brand/logo6.png" class="main-logo logo-color6" alt="logo">
			</a>
			<a class="desktop-logo logo-dark active" href="index.html"><img src="assets/img/brand/logo-white.png"
					class="main-logo dark-theme" alt="logo"></a>
			<div class="app-sidebar__toggle" data-toggle="sidebar">
				<a class="open-toggle" href="#"><i class="header-icon fe fe-chevron-left"></i></a>
				<a class="close-toggle" href="#"><i class="header-icon fe fe-chevron-right"></i></a>
			</div>
		</div>
		<div class="main-sidemenu sidebar-scroll">
			<ul class="side-menu">
				<li>
					<h3>Main</h3>
				</li>
				<li class="slide">
					<a class="side-menu__item" href="index.html">
						<div class="side-angle1"></div>
						<div class="side-angle2"></div>
						<div class="side-arrow"></div>
						<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
							<path d="M0 0h24v24H0V0z" fill="none" />
							<path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z" />
							<path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3" />
						</svg>
						<span class="side-menu__label">Dashboard</span>
					</a>
				</li>
				<li class="slide">
					<a class="side-menu__item" data-toggle="slide" href="#">
						<div class="side-angle1"></div>
						<div class="side-angle2"></div>
						<div class="side-arrow"></div>
						<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
							<path d="M0 0h24v24H0V0z" fill="none" />
							<path d="M20 8l-8 5-8-5v10h16zm0-2H4l8 4.99z" opacity=".3" />
							<path
								d="M4 20h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM20 6l-8 4.99L4 6h16zM4 8l8 5 8-5v10H4V8z" />
						</svg>
						<span class="side-menu__label">Layouts</span><i class="angle fe fe-chevron-right"></i>
					</a>
					<ul class="slide-menu">
						<li><a class="slide-item" href="vertical.html">Vertical</a></li>
						<li><a class="slide-item" href="horizontal.html">Horizontal</a></li>
					</ul>
				</li>
				<li>
					<h3>Widgets &amp; Maps</h3>
				</li>
				<li class="slide">
					<a class="side-menu__item" href="widgets.html">
						<div class="side-angle1"></div>
						<div class="side-angle2"></div>
						<div class="side-arrow"></div>
						<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
							<path d="M0 0h24v24H0V0z" fill="none" />
							<path d="M5 5h4v4H5zm10 10h4v4h-4zM5 15h4v4H5zM16.66 4.52l-2.83 2.82 2.83 2.83 2.83-2.83z" opacity=".3" />
							<path
								d="M16.66 1.69L11 7.34 16.66 13l5.66-5.66-5.66-5.65zm-2.83 5.65l2.83-2.83 2.83 2.83-2.83 2.83-2.83-2.83zM3 3v8h8V3H3zm6 6H5V5h4v4zM3 21h8v-8H3v8zm2-6h4v4H5v-4zm8-2v8h8v-8h-8zm6 6h-4v-4h4v4z" />
						</svg>
						<span class="side-menu__label">Widgets</span>
					</a>
				</li>
				<li>
					<h3>Mail</h3>
				</li>
				<li class="slide">
					<a class="side-menu__item" data-toggle="slide" href="#">
						<div class="side-angle1"></div>
						<div class="side-angle2"></div>
						<div class="side-arrow"></div>
						<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
							<path d="M0 0h24v24H0V0z" fill="none" />
							<path d="M20 8l-8 5-8-5v10h16zm0-2H4l8 4.99z" opacity=".3" />
							<path
								d="M4 20h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM20 6l-8 4.99L4 6h16zM4 8l8 5 8-5v10H4V8z" />
						</svg>
						<span class="side-menu__label">Mail</span><i class="angle fe fe-chevron-right"></i>
					</a>
					<ul class="slide-menu">
						<li><a class="slide-item" href="mail-inbox.html">Mail Inbox</a></li>
						<li><a class="slide-item" href="mail-compose.html">Mail Compose</a></li>
						<li><a class="slide-item" href="mail-read.html">Mail Read</a></li>
						<li><a class="slide-item" href="mail-settings.html">Mail Settings</a></li>
						<li><a class="slide-item" href="chat.html">Chat</a></li>
					</ul>
				</li>
				<li class="slide">
					<a class="side-menu__item" data-toggle="slide" href="#">
						<div class="side-angle1"></div>
						<div class="side-angle2"></div>
						<div class="side-arrow"></div>
						<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
							<path d="M0 0h24v24H0V0z" fill="none" />
							<path d="M12 3.19L5 6.3V12h7v8.93c3.72-1.15 6.47-4.82 7-8.94h-7v-8.8z" opacity=".3" />
							<path
								d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 19.93V12H5V6.3l7-3.11v8.8h7c-.53 4.12-3.28 7.79-7 8.94z" />
						</svg>
						<span class="side-menu__label">Apps</span><i class="angle fe fe-chevron-right"></i>
					</a>
					<ul class="slide-menu">
						<li><a class="slide-item" href="cards.html">Cards</a></li>
						<li><a class="slide-item" href="darggablecards.html">Draggable-cards</a></li>
						<li><a class="slide-item" href="rangeslider.html">Range-slider</a></li>
						<li><a class="slide-item" href="calendar.html">Calendar</a></li>
						<li><a class="slide-item" href="contacts.html">Contacts</a></li>
						<li><a class="slide-item" href="image-compare.html">Image-compare</a></li>
						<li><a class="slide-item" href="notification.html">Notification</a></li>
						<li><a class="slide-item" href="widget-notification.html">Widget-notification</a></li>
						<li><a class="slide-item" href="treeview.html">Treeview</a></li>
					</ul>
				</li>
				<li class="slide">
					<a class="side-menu__item" data-toggle="slide" href="#">
						<div class="side-angle1"></div>
						<div class="side-angle2"></div>
						<div class="side-arrow"></div>
						<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
							<path d="M0 0h24v24H0V0z" fill="none" />
							<path d="M17 7H7V4H5v16h14V4h-2z" opacity=".3" />
							<path
								d="M19 2h-4.18C14.4.84 13.3 0 12 0S9.6.84 9.18 2H5c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm7 18H5V4h2v3h10V4h2v16z" />
						</svg>
						<span class="side-menu__label">Components</span><i class="angle fe fe-chevron-right"></i>
					</a>
					<ul class="slide-menu">
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span
									class="sub-side-menu__label">Maps</span><i class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="map-leaflet.html">Leaflet Maps</a></li>
								<li><a class="sub-slide-item" href="map-vector.html">Vector Maps</a></li>
							</ul>
						</li>
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span
									class="sub-side-menu__label">Tables</span><i class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="table-basic.html">Basic Tables</a></li>
								<li><a class="sub-slide-item" href="table-data.html">Data Tables</a></li>
							</ul>
						</li>
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span
									class="sub-side-menu__label">Elements</span><i class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="alerts.html">Alerts</a></li>
								<li><a class="sub-slide-item" href="avatar.html">Avatar</a></li>
								<li><a class="sub-slide-item" href="breadcrumbs.html">Breadcrumbs</a></li>
								<li><a class="sub-slide-item" href="buttons.html">Buttons</a></li>
								<li><a class="sub-slide-item" href="badge.html">Badge</a></li>
								<li><a class="sub-slide-item" href="dropdown.html">Dropdown</a></li>
								<li><a class="sub-slide-item" href="thumbnails.html">Thumbnails</a></li>
								<li><a class="sub-slide-item" href="list-group.html">List Group</a></li>
								<li><a class="sub-slide-item" href="navigation.html">Navigation</a></li>
								<li><a class="sub-slide-item" href="pagination.html">Pagination</a></li>
								<li><a class="sub-slide-item" href="popover.html">Popover</a></li>
								<li><a class="sub-slide-item" href="progress.html">Progress</a></li>
								<li><a class="sub-slide-item" href="spinners.html">Spinners</a></li>
								<li><a class="sub-slide-item" href="media-object.html">Media Object</a></li>
								<li><a class="sub-slide-item" href="typography.html">Typography</a></li>
								<li><a class="sub-slide-item" href="tooltip.html">Tooltip</a></li>
								<li><a class="sub-slide-item" href="toast.html">Toast</a></li>
								<li><a class="sub-slide-item" href="tags.html">Tags</a></li>
								<li><a class="sub-slide-item" href="tabs.html">Tabs</a></li>
							</ul>
						</li>
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span
									class="sub-side-menu__label">Advanced Ui</span><i class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="accordion.html">Accordion</a></li>
								<li><a class="sub-slide-item" href="carousel.html">Carousel</a></li>
								<li><a class="sub-slide-item" href="collapse.html">Collapse</a></li>
								<li><a class="sub-slide-item" href="modals.html">Modals</a></li>
								<li><a class="sub-slide-item" href="timeline.html">Timeline</a></li>
								<li><a class="sub-slide-item" href="sweet-alert.html">Sweet Alert</a></li>
								<li><a class="sub-slide-item" href="rating.html">Ratings</a></li>
								<li><a class="sub-slide-item" href="counters.html">Counters</a></li>
								<li><a class="sub-slide-item" href="search.html">Search</a></li>
								<li><a class="sub-slide-item" href="userlist.html">Userlist</a></li>

							</ul>
						</li>
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span
									class="sub-side-menu__label">Forms</span><i class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="form-elements.html">Form Elements</a></li>
								<li><a class="sub-slide-item" href="form-advanced.html">Advanced Forms</a></li>
								<li><a class="sub-slide-item" href="form-layouts.html">Form Layouts</a></li>
								<li><a class="sub-slide-item" href="form-validation.html">Form Validation</a></li>
								<li><a class="sub-slide-item" href="form-wizards.html">Form Wizards</a></li>
								<li><a class="sub-slide-item" href="form-editor.html">Form Editor</a></li>
								<li><a class="sub-slide-item" href="form-elements-sizes.html">Form Sizes</a></li>
								<li><a class="sub-slide-item" href="form-inputmask.html">Input Mask</a></li>
								<li><a class="sub-slide-item" href="form-upload.html">File Uploads</a></li>
							</ul>
						</li>
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span
									class="sub-side-menu__label">Charts</span><i class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="chart-morris.html">Morris Charts</a></li>
								<li><a class="sub-slide-item" href="chart-flot.html">Flot Charts</a></li>
								<li><a class="sub-slide-item" href="chart-chartjs.html">ChartJS</a></li>
								<li><a class="sub-slide-item" href="chart-echart.html">Echart</a></li>
								<li><a class="sub-slide-item" href="chart-sparkline.html">Sparkline</a></li>
								<li><a class="sub-slide-item" href="chart-peity.html">Chart-peity</a></li>
							</ul>
						</li>
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span
									class="sub-side-menu__label">Pages</span><i class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="profile.html">Profile</a></li>
								<li><a class="sub-slide-item" href="editprofile.html">Edit-Profile</a></li>
								<li><a class="sub-slide-item" href="invoice.html">Invoice</a></li>
								<li><a class="sub-slide-item" href="pricing.html">Pricing</a></li>
								<li><a class="sub-slide-item" href="gallery.html">Gallery</a></li>
								<li><a class="sub-slide-item" href="todotask.html">Todotask</a></li>
								<li><a class="sub-slide-item" href="faq.html">Faqs</a></li>
								<li><a class="sub-slide-item" href="emptypage.html">Empty Page</a></li>
							</ul>
						</li>
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span
									class="sub-side-menu__label">E-Commerce</span><i class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="products.html">Products</a></li>
								<li><a class="sub-slide-item" href="product-details.html">Product-Details</a></li>
								<li><a class="sub-slide-item" href="product-cart.html">Cart</a></li>
								<li><a class="sub-slide-item" href="product-checkout.html">Product Checkout</a></li>
							</ul>
						</li>
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span
									class="sub-side-menu__label">Blog</span><i class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="bloglist01.html">Blog list 01</a></li>
								<li><a class="sub-slide-item" href="bloglist02.html">Blog list 02</a></li>
								<li><a class="sub-slide-item" href="bloglist03.html">Blog list 03</a></li>
								<li><a class="sub-slide-item" href="bloglist04.html">Blog list 04</a></li>
								<li><a class="sub-slide-item" href="bloglist05.html">Blog list 05</a></li>
								<li><a class="sub-slide-item" href="blog.html">Blog Details</a></li>
							</ul>
						</li>
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Icons
									List</span><i class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="icons.html">Fontawesome</a></li>
								<li><a class="sub-slide-item" href="icons2.html">Simple line</a></li>
								<li><a class="sub-slide-item" href="icons3.html">Feather</a></li>
								<li><a class="sub-slide-item" href="icons4.html">Line Awesome</a></li>
								<li><a class="sub-slide-item" href="icons5.html">Themify</a></li>
								<li><a class="sub-slide-item" href="icons6.html">Typicon Icons</a></li>
							</ul>
						</li>
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span
									class="sub-side-menu__label">Utilities</span><i class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="background.html">Background</a></li>
								<li><a class="sub-slide-item" href="border.html">Border</a></li>
								<li><a class="sub-slide-item" href="display.html">Display</a></li>
								<li><a class="sub-slide-item" href="flex.html">Flex</a></li>
								<li><a class="sub-slide-item" href="height.html">Height</a></li>
								<li><a class="sub-slide-item" href="margin.html">Margin</a></li>
								<li><a class="sub-slide-item" href="padding.html">Padding</a></li>
								<li><a class="sub-slide-item" href="position.html">Position</a></li>
								<li><a class="sub-slide-item" href="width.html">Width</a></li>
								<li><a class="sub-slide-item" href="extras.html">Extras</a></li>
							</ul>
						</li>
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span
									class="sub-side-menu__label">Authenication</span><i class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="signin.html">Sign In</a></li>
								<li><a class="sub-slide-item" href="signup.html">Sign Up</a></li>
								<li><a class="sub-slide-item" href="forgot.html">Forgot Password</a></li>
								<li><a class="sub-slide-item" href="reset.html">Reset Password</a></li>
								<li><a class="sub-slide-item" href="lockscreen.html">Lockscreen</a></li>
								<li><a class="sub-slide-item" href="underconstruction.html">UnderConstruction</a></li>
								<li><a class="sub-slide-item" href="error404.html">404 Error</a></li>
								<li><a class="sub-slide-item" href="error500.html">500 Error</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="slide">
					<a class="side-menu__item" data-toggle="slide" href="#">
						<div class="side-angle1"></div>
						<div class="side-angle2"></div>
						<div class="side-arrow"></div>
						<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
							height="24" viewBox="0 0 24 24" width="24">
							<g>
								<rect fill="none" height="24" width="24" />
							</g>
							<g>
								<g>
									<rect height="5" opacity=".3" width="5" x="11" y="11" />
									<rect height="5" opacity=".3" width="5" x="4" y="11" />
									<rect height="5" opacity=".3" width="12" x="4" y="4" />
									<path d="M20,6v14H6v2h14c1.1,0,2-0.9,2-2V6H20z" />
									<path
										d="M18,16V4c0-1.1-0.9-2-2-2H4C2.9,2,2,2.9,2,4v12c0,1.1,0.9,2,2,2h12C17.1,18,18,17.1,18,16z M4,4h12v5H4V4z M9,16H4v-5h5 V16z M11,11h5v5h-5V11z" />
								</g>
							</g>
						</svg>
						<span class="side-menu__label">Sub Menu</span><i class="angle fe fe-chevron-right"></i>
					</a>
					<ul class="slide-menu">
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Submenu
									1</span><i class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="#">Submenu 1.1</a></li>
								<li class="sub-slide2">
									<a class="sub-slide-item" data-toggle="sub-slide2" href="#"><span
											class="sub-side-menu__label2">Submenu 1.2</span><i class="sub-angle2 fe fe-chevron-right"></i></a>
									<ul class="sub-slide-menu2">
										<li><a class="sub-slide-item2" href="#">Submenu 1.2.1</a></li>
										<li><a class="sub-slide-item2" href="#">Submenu 1.2.2</a></li>
										<li><a class="sub-slide-item2" href="#">Submenu 1.2.3</a></li>
									</ul>
								</li>
								<li><a class="sub-slide-item" href="#">Submenu 1.3</a></li>
							</ul>
						</li>
						<li><a class="sub-side-menu__item" href="#"><span class="sub-side-menu__label">Submenu 2</span></a></li>
						<li><a class="sub-side-menu__item" href="#"><span class="sub-side-menu__label">Submenu 3</span></a></li>
					</ul>
				</li>
			</ul>
			<div class="app-sidefooter">
				<a class="side-menu__item" href="#"><svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24"
						viewBox="0 0 24 24" width="24">
						<path d="M0 0h24v24H0V0z" fill="none" />
						<path
							d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8 8-3.59 8-8-3.59-8-8-8zm1 14h-2v-2h2v2zm0-3h-2c0-3.25 3-3 3-5 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 2.5-3 2.75-3 5z"
							opacity=".3" />
						<path
							d="M11 16h2v2h-2zm1-14C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z" />
					</svg> <span class="side-menu__label">Suport</span></a>
				<a class="side-menu__item" href="#"><svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg"
						enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24">
						<g>
							<rect fill="none" height="24" width="24" />
						</g>
						<g>
							<path
								d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z" />
						</g>
					</svg> <span class="side-menu__label">Logout</span></a>
			</div>
		</div>
	</aside>
	<!-- main-sidebar -->
	<!-- main-content -->
	<div class="main-content app-content">

		<!-- main-header -->
		<div class="main-header sticky side-header nav nav-item">
			<div class="container-fluid">
				<div class="main-header-left">
					<div class="responsive-logo">
						<a href="index.html"><img src="assets/img/brand/logo.png" class="logo-1 logo-color1" alt="logo"></a>
						<a href="index.html"><img src="assets/img/brand/logo2.png" class="logo-1 logo-color2" alt="logo"></a>
						<a href="index.html"><img src="assets/img/brand/logo3.png" class="logo-1 logo-color3" alt="logo"></a>
						<a href="index.html"><img src="assets/img/brand/logo4.png" class="logo-1 logo-color4" alt="logo"></a>
						<a href="index.html"><img src="assets/img/brand/logo5.png" class="logo-1 logo-color5" alt="logo"></a>
						<a href="index.html"><img src="assets/img/brand/logo6.png" class="logo-1 logo-color6" alt="logo"></a>
						<a href="index.html"><img src="assets/img/brand/logo-white.png" class="dark-logo-1" alt="logo"></a>
						<a href="index.html"><img src="assets/img/brand/favicon.png" class="logo-2 logo-color1" alt="logo"></a>
						<a href="index.html"><img src="assets/img/brand/favicon2.png" class="logo-2 logo-color2" alt="logo"></a>
						<a href="index.html"><img src="assets/img/brand/favicon3.png" class="logo-2 logo-color3" alt="logo"></a>
						<a href="index.html"><img src="assets/img/brand/favicon4.png" class="logo-2 logo-color4" alt="logo"></a>
						<a href="index.html"><img src="assets/img/brand/favicon5.png" class="logo-2 logo-color5" alt="logo"></a>
						<a href="index.html"><img src="assets/img/brand/favicon6.png" class="logo-2 logo-color6" alt="logo"></a>
						<a href="index.html"><img src="assets/img/brand/favicon-white.png" class="dark-logo-2" alt="logo"></a>
					</div>
					<div class="app-sidebar__toggle d-md-none" data-toggle="sidebar">
						<a class="open-toggle" href="#"><i class="header-icon fe fe-align-left"></i></a>
						<a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
					</div>
				</div>
				<div class="main-header-right">
					<div class="nav nav-item  navbar-nav-right ml-auto">
						<div class="nav-link" id="bs-example-navbar-collapse-1">
							<form class="navbar-form" role="search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search">
									<span class="input-group-btn">
										<button type="reset" class="btn btn-default">
											<i class="fas fa-times"></i>
										</button>
										<button type="submit" class="btn btn-default nav-link resp-btn">
											<i class="fe fe-search"></i>
										</button>
									</span>
								</div>
							</form>
						</div>
						<div class="main-header-search ml-0 d-sm-none d-none d-lg-block">
							<input class="form-control" id="search-input" placeholder="Search for anything..." type="text"> <button
								class="btn"><i class="fas fa-search d-none d-md-block"></i></button>
						</div>
						<div class="dropdown nav-item main-header-notification">
							<a class="new nav-link" href="#"><i class="fe fe-bell"></i><span class=" pulse"></span></a>
							<div class="dropdown-menu shadow">
								<div class="menu-header-content bg-primary text-left d-flex">
									<div class="">
										<h6 class="menu-header-title text-white mb-0">7 new Notifications</h6>
									</div>
									<div class="my-auto ml-auto">
										<span class="badge badge-pill badge-warning float-right">Mark All Read</span>
									</div>
								</div>
								<div class="main-notification-list Notification-scroll ps">
									<a class="d-flex p-3 border-bottom" href="#">
										<div class="notifyimg bg-success-transparent">
											<i class="la la-shopping-basket text-success"></i>
										</div>
										<div class="ml-3">
											<h5 class="notification-label mb-1">New Order Received</h5>
											<div class="notification-subtext">1 hour ago</div>
										</div>
										<div class="ml-auto">
											<i class="las la-angle-right text-right text-muted"></i>
										</div>
									</a>
									<a class="d-flex p-3 border-bottom" href="#">
										<div class="notifyimg bg-danger-transparent">
											<i class="la la-user-check text-danger"></i>
										</div>
										<div class="ml-3">
											<h5 class="notification-label mb-1">22 verified registrations</h5>
											<div class="notification-subtext">2 hour ago</div>
										</div>
										<div class="ml-auto">
											<i class="las la-angle-right text-right text-muted"></i>
										</div>
									</a>
									<a class="d-flex p-3 border-bottom" href="#">
										<div class="notifyimg bg-primary-transparent">
											<i class="la la-check-circle text-primary"></i>
										</div>
										<div class="ml-3">
											<h5 class="notification-label mb-1">Project has been approved</h5>
											<div class="notification-subtext">4 hour ago</div>
										</div>
										<div class="ml-auto">
											<i class="las la-angle-right text-right text-muted"></i>
										</div>
									</a>
									<a class="d-flex p-3 border-bottom" href="#">
										<div class="notifyimg bg-pink-transparent">
											<i class="la la-file-alt text-pink"></i>
										</div>
										<div class="ml-3">
											<h5 class="notification-label mb-1">New files available</h5>
											<div class="notification-subtext">10 hour ago</div>
										</div>
										<div class="ml-auto">
											<i class="las la-angle-right text-right text-muted"></i>
										</div>
									</a>
									<a class="d-flex p-3 border-bottom" href="#">
										<div class="notifyimg bg-warning-transparent">
											<i class="la la-envelope-open text-warning"></i>
										</div>
										<div class="ml-3">
											<h5 class="notification-label mb-1">New review received</h5>
											<div class="notification-subtext">1 day ago</div>
										</div>
										<div class="ml-auto">
											<i class="las la-angle-right text-right text-muted"></i>
										</div>
									</a>
									<a class="d-flex p-3" href="#">
										<div class="notifyimg bg-purple-transparent">
											<i class="la la-gem text-purple"></i>
										</div>
										<div class="ml-3">
											<h5 class="notification-label mb-1">Updates Available</h5>
											<div class="notification-subtext">2 days ago</div>
										</div>
										<div class="ml-auto">
											<i class="las la-angle-right text-right text-muted"></i>
										</div>
									</a>
									<div class="dropdown-footer">
										<a href="#">VIEW ALL</a>
									</div>
								</div>
							</div>
						</div>
						<div class="dropdown main-profile-menu nav nav-item nav-link">
							<a class="profile-user d-flex" href="#"><img alt="" src="assets/img/faces/6.jpg">
								<div class="p-text d-none">
									<span class="p-name font-weight-bold">Mintrona Pechon</span>
									<small class="p-sub-text">Premium Member</small>
								</div>
							</a>
							<div class="dropdown-menu shadow">
								<div class="main-header-profile header-img">
									<div class="main-img-user"><img alt="" src="assets/img/faces/6.jpg"></div>
									<h6>Mintrona Pechon</h6><span>Premium Member</span>
								</div>
								<a class="dropdown-item" href="#"><i class="far fa-user"></i> My Profile</a>
								<a class="dropdown-item" href="#"><i class="far fa-edit"></i> Edit Profile</a>
								<a class="dropdown-item" href="#"><i class="far fa-clock"></i> Activity Logs</a>
								<a class="dropdown-item" href="#"><i class="fas fa-sliders-h"></i> Account Settings</a>
								<a class="dropdown-item" href="signin.html"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
							</div>
						</div>
						<div class="dropdown main-header-message right-toggle">
							<a class="nav-link pr-0" data-toggle="sidebar-right" data-target=".sidebar-right">
								<i class="ion ion-md-menu tx-20 bg-transparent"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /main-header -->
		<!-- container -->
		<div class="container-fluid mg-t-20">

			<!-- breadcrumb -->

			<div class="breadcrumb-header justify-content-between">


				<div class="left-content">
					<h4 class="content-title mb-1">Data Tables</h4>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Tables</a></li>
							<li class="breadcrumb-item active" aria-current="page">Data Tables</li>
						</ol>
					</nav>
				</div>


			</div>
			<!-- breadcrumb -->


			<!-- row opened -->
			<div class="row row-sm">
				<div class="col-xl-12">
					<div class="card">
						<div class="card-header pb-0 pd-t-25">
							<div class="d-flex justify-content-between">
								<h4 class="card-title mg-b-0">SIMPLE TABLE</h4>
							</div>
							<p class="tx-12 text-muted mb-0">Example of Dashfox Simple Table. <a href="#">Learn more</a></p>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table text-md-nowrap" id="example1">
									<thead>
										<tr>
											<th class="wd-15p border-bottom-0">First name</th>
											<th class="wd-15p border-bottom-0">Last name</th>
											<th class="wd-20p border-bottom-0">Position</th>
											<th class="wd-15p border-bottom-0">Start date</th>
											<th class="wd-10p border-bottom-0">Salary</th>
											<th class="wd-25p border-bottom-0">E-mail</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Bella</td>
											<td>Chloe</td>
											<td>System Developer</td>
											<td>2018/03/12</td>
											<td>$654,765</td>
											<td>b.Chloe@datatables.net</td>
										</tr>
										<tr>
											<td>Donna</td>
											<td>Bond</td>
											<td>Account Manager</td>
											<td>2012/02/21</td>
											<td>$543,654</td>
											<td>d.bond@datatables.net</td>
										</tr>
										<tr>
											<td>Harry</td>
											<td>Carr</td>
											<td>Technical Manager</td>
											<td>20011/02/87</td>
											<td>$86,000</td>
											<td>h.carr@datatables.net</td>
										</tr>
										<tr>
											<td>Lucas</td>
											<td>Dyer</td>
											<td>Javascript Developer</td>
											<td>2014/08/23</td>
											<td>$456,123</td>
											<td>l.dyer@datatables.net</td>
										</tr>
										<tr>
											<td>Karen</td>
											<td>Hill</td>
											<td>Sales Manager</td>
											<td>2010/7/14</td>
											<td>$432,230</td>
											<td>k.hill@datatables.net</td>
										</tr>
										<tr>
											<td>Dominic</td>
											<td>Hudson</td>
											<td>Sales Assistant</td>
											<td>2018/10/16</td>
											<td>$654,300</td>
											<td>d.hudson@datatables.net</td>
										</tr>
										<tr>
											<td>Herrod</td>
											<td>Chandler</td>
											<td>Integration Specialist</td>
											<td>2012/08/06</td>
											<td>$137,500</td>
											<td>h.chandler@datatables.net</td>
										</tr>
										<tr>
											<td>Jonathan</td>
											<td>Ince</td>
											<td>junior Manager</td>
											<td>2012/11/23</td>
											<td>$345,789</td>
											<td>j.ince@datatables.net</td>
										</tr>
										<tr>
											<td>Leonard</td>
											<td>Ellison</td>
											<td>Junior Javascript Developer</td>
											<td>2010/03/19</td>
											<td>$205,500</td>
											<td>l.ellison@datatables.net</td>
										</tr>
										<tr>
											<td>Madeleine</td>
											<td>Lee</td>
											<td>Software Developer</td>
											<td>20015/8/23</td>
											<td>$456,890</td>
											<td>m.lee@datatables.net</td>
										</tr>
										<tr>
											<td>Karen</td>
											<td>Miller</td>
											<td>Office Director</td>
											<td>2012/9/25</td>
											<td>$87,654</td>
											<td>k.miller@datatables.net</td>
										</tr>
										<tr>
											<td>Lisa</td>
											<td>Smith</td>
											<td>Support Lead</td>
											<td>2011/05/21</td>
											<td>$342,000</td>
											<td>l.simth@datatables.net</td>
										</tr>
										<tr>
											<td>Morgan</td>
											<td>Keith</td>
											<td>Accountant</td>
											<td>2012/11/27</td>
											<td>$675,245</td>
											<td>m.keith@datatables.net</td>
										</tr>
										<tr>
											<td>Nathan</td>
											<td>Mills</td>
											<td>Senior Marketing Designer</td>
											<td>2014/10/8</td>
											<td>$765,980</td>
											<td>n.mills@datatables.net</td>
										</tr>
										<tr>
											<td>Ruth</td>
											<td>May</td>
											<td>office Manager</td>
											<td>2010/03/17</td>
											<td>$654,765</td>
											<td>r.may@datatables.net</td>
										</tr>
										<tr>
											<td>Penelope</td>
											<td>Ogden</td>
											<td>Marketing Manager</td>
											<td>2013/5/22</td>
											<td>$345,510</td>
											<td>p.ogden@datatables.net</td>
										</tr>
										<tr>
											<td>Sean</td>
											<td>Piper</td>
											<td>Financial Officer</td>
											<td>2014/06/11</td>
											<td>$725,000</td>
											<td>s.piper@datatables.net</td>
										</tr>
										<tr>
											<td>Trevor</td>
											<td>Ross</td>
											<td>Systems Administrator</td>
											<td>2011/05/23</td>
											<td>$237,500</td>
											<td>t.ross@datatables.net</td>
										</tr>
										<tr>
											<td>Vanessa</td>
											<td>Robertson</td>
											<td>Software Designer</td>
											<td>2014/6/23</td>
											<td>$765,654</td>
											<td>v.robertson@datatables.net</td>
										</tr>
										<tr>
											<td>Una</td>
											<td>Richard</td>
											<td>Personnel Manager</td>
											<td>2014/5/22</td>
											<td>$765,290</td>
											<td>u.richard@datatables.net</td>
										</tr>
										<tr>
											<td>Justin</td>
											<td>Peters</td>
											<td>Development lead</td>
											<td>2013/10/23</td>
											<td>$765,654</td>
											<td>j.peters@datatables.net</td>
										</tr>
										<tr>
											<td>Adrian</td>
											<td>Terry</td>
											<td>Marketing Officer</td>
											<td>2013/04/21</td>
											<td>$543,769</td>
											<td>a.terry@datatables.net</td>
										</tr>
										<tr>
											<td>Cameron</td>
											<td>Watson</td>
											<td>Sales Support</td>
											<td>2013/9/7</td>
											<td>$675,876</td>
											<td>c.watson@datatables.net</td>
										</tr>
										<tr>
											<td>Evan</td>
											<td>Terry</td>
											<td>Sales Manager</td>
											<td>2013/10/26</td>
											<td>$66,340</td>
											<td>d.terry@datatables.net</td>
										</tr>
										<tr>
											<td>Angelica</td>
											<td>Ramos</td>
											<td>Chief Executive Officer</td>
											<td>20017/10/15</td>
											<td>$6,234,000</td>
											<td>a.ramos@datatables.net</td>
										</tr>
										<tr>
											<td>Connor</td>
											<td>Johne</td>
											<td>Web Developer</td>
											<td>2011/1/25</td>
											<td>$92,575</td>
											<td>C.johne@datatables.net</td>
										</tr>
										<tr>
											<td>Jennifer</td>
											<td>Chang</td>
											<td>Regional Director</td>
											<td>2012/17/11</td>
											<td>$546,890</td>
											<td>j.chang@datatables.net</td>
										</tr>
										<tr>
											<td>Brenden</td>
											<td>Wagner</td>
											<td>Software Engineer</td>
											<td>2013/07/14</td>
											<td>$206,850</td>
											<td>b.wagner@datatables.net</td>
										</tr>
										<tr>
											<td>Fiona</td>
											<td>Green</td>
											<td>Chief Operating Officer</td>
											<td>2018/06/23</td>
											<td>$345,789</td>
											<td>f.green@datatables.net</td>
										</tr>
										<tr>
											<td>Shou</td>
											<td>Itou</td>
											<td>Regional Marketing</td>
											<td>2013/07/19</td>
											<td>$335,300</td>
											<td>s.itou@datatables.net</td>
										</tr>
										<tr>
											<td>Michelle</td>
											<td>House</td>
											<td>Integration Specialist</td>
											<td>2016/07/18</td>
											<td>$76,890</td>
											<td>m.house@datatables.net</td>
										</tr>
										<tr>
											<td>Suki</td>
											<td>Burks</td>
											<td>Developer</td>
											<td>2010/11/45</td>
											<td>$678,890</td>
											<td>s.burks@datatables.net</td>
										</tr>
										<tr>
											<td>Prescott</td>
											<td>Bartlett</td>
											<td>Technical Author</td>
											<td>2014/12/25</td>
											<td>$789,100</td>
											<td>p.bartlett@datatables.net</td>
										</tr>
										<tr>
											<td>Gavin</td>
											<td>Cortez</td>
											<td>Team Leader</td>
											<td>2018/1/19</td>
											<td>$345,890</td>
											<td>g.cortez@datatables.net</td>
										</tr>
										<tr>
											<td>Martena</td>
											<td>Mccray</td>
											<td>Post-Sales support</td>
											<td>2011/03/09</td>
											<td>$324,050</td>
											<td>m.mccray@datatables.net</td>
										</tr>
										<tr>
											<td>Unity</td>
											<td>Butler</td>
											<td>Marketing Designer</td>
											<td>2014/7/28</td>
											<td>$34,983</td>
											<td>u.butler@datatables.net</td>
										</tr>
										<tr>
											<td>Howard</td>
											<td>Hatfield</td>
											<td>Office Manager</td>
											<td>2013/8/19</td>
											<td>$98,000</td>
											<td>h.hatfield@datatables.net</td>
										</tr>
										<tr>
											<td>Hope</td>
											<td>Fuentes</td>
											<td>Secretary</td>
											<td>2018/07/28</td>
											<td>$78,879</td>
											<td>h.fuentes@datatables.net</td>
										</tr>
										<tr>
											<td>Vivian</td>
											<td>Harrell</td>
											<td>Financial Controller</td>
											<td>2010/02/14</td>
											<td>$452,500</td>
											<td>v.harrell@datatables.net</td>
										</tr>
										<tr>
											<td>Timothy</td>
											<td>Mooney</td>
											<td>Office Manager</td>
											<td>20016/12/11</td>
											<td>$136,200</td>
											<td>t.mooney@datatables.net</td>
										</tr>
										<tr>
											<td>Jackson</td>
											<td>Bradshaw</td>
											<td>Director</td>
											<td>2011/09/26</td>
											<td>$645,750</td>
											<td>j.bradshaw@datatables.net</td>
										</tr>
										<tr>
											<td>Olivia</td>
											<td>Liang</td>
											<td>Support Engineer</td>
											<td>2014/02/03</td>
											<td>$234,500</td>
											<td>o.liang@datatables.net</td>
										</tr>
										<tr>
											<td>Bruno</td>
											<td>Nash</td>
											<td>Software Engineer</td>
											<td>2018/05/03</td>
											<td>$163,500</td>
											<td>b.nash@datatables.net</td>
										</tr>
										<tr>
											<td>Sakura</td>
											<td>Yamamoto</td>
											<td>Support Engineer</td>
											<td>2010/08/19</td>
											<td>$139,575</td>
											<td>s.yamamoto@datatables.net</td>
										</tr>
										<tr>
											<td>Thor</td>
											<td>Walton</td>
											<td>Developer</td>
											<td>2012/08/11</td>
											<td>$98,540</td>
											<td>t.walton@datatables.net</td>
										</tr>
										<tr>
											<td>Finn</td>
											<td>Camacho</td>
											<td>Support Engineer</td>
											<td>2016/07/07</td>
											<td>$87,500</td>
											<td>f.camacho@datatables.net</td>
										</tr>
										<tr>
											<td>Serge</td>
											<td>Baldwin</td>
											<td>Data Coordinator</td>
											<td>2017/04/09</td>
											<td>$138,575</td>
											<td>s.baldwin@datatables.net</td>
										</tr>
										<tr>
											<td>Zenaida</td>
											<td>Frank</td>
											<td>Software Engineer</td>
											<td>2018/01/04</td>
											<td>$125,250</td>
											<td>z.frank@datatables.net</td>
										</tr>
										<tr>
											<td>Zorita</td>
											<td>Serrano</td>
											<td>Software Engineer</td>
											<td>2017/06/01</td>
											<td>$115,000</td>
											<td>z.serrano@datatables.net</td>
										</tr>
										<tr>
											<td>Jennifer</td>
											<td>Acosta</td>
											<td>Junior Javascript Developer</td>
											<td>2017/02/01</td>
											<td>$75,650</td>
											<td>j.acosta@datatables.net</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!--/div-->

				<!--div-->
				<div class="col-xl-12">
					<div class="card">
						<div class="card-header pb-0 pd-t-25">
							<div class="d-flex justify-content-between">
								<h4 class="card-title mg-b-0">STRIPED ROWS</h4>
							</div>
							<p class="tx-12 text-muted mb-0">Example of Dashfox Striped Rows.. <a href="#">Learn more</a></p>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table text-md-nowrap table-striped" id="example2">
									<thead>
										<tr>
											<th class="wd-15p border-bottom-0">First name</th>
											<th class="wd-15p border-bottom-0">Last name</th>
											<th class="wd-20p border-bottom-0">Position</th>
											<th class="wd-15p border-bottom-0">Start date</th>
											<th class="wd-10p border-bottom-0">Salary</th>
											<th class="wd-25p border-bottom-0">E-mail</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Bella</td>
											<td>Chloe</td>
											<td>System Developer</td>
											<td>2018/03/12</td>
											<td>$654,765</td>
											<td>b.Chloe@datatables.net</td>
										</tr>
										<tr>
											<td>Donna</td>
											<td>Bond</td>
											<td>Account Manager</td>
											<td>2012/02/21</td>
											<td>$543,654</td>
											<td>d.bond@datatables.net</td>
										</tr>
										<tr>
											<td>Harry</td>
											<td>Carr</td>
											<td>Technical Manager</td>
											<td>20011/02/87</td>
											<td>$86,000</td>
											<td>h.carr@datatables.net</td>
										</tr>
										<tr>
											<td>Lucas</td>
											<td>Dyer</td>
											<td>Javascript Developer</td>
											<td>2014/08/23</td>
											<td>$456,123</td>
											<td>l.dyer@datatables.net</td>
										</tr>
										<tr>
											<td>Karen</td>
											<td>Hill</td>
											<td>Sales Manager</td>
											<td>2010/7/14</td>
											<td>$432,230</td>
											<td>k.hill@datatables.net</td>
										</tr>
										<tr>
											<td>Dominic</td>
											<td>Hudson</td>
											<td>Sales Assistant</td>
											<td>2018/10/16</td>
											<td>$654,300</td>
											<td>d.hudson@datatables.net</td>
										</tr>
										<tr>
											<td>Herrod</td>
											<td>Chandler</td>
											<td>Integration Specialist</td>
											<td>2012/08/06</td>
											<td>$137,500</td>
											<td>h.chandler@datatables.net</td>
										</tr>
										<tr>
											<td>Jonathan</td>
											<td>Ince</td>
											<td>junior Manager</td>
											<td>2012/11/23</td>
											<td>$345,789</td>
											<td>j.ince@datatables.net</td>
										</tr>
										<tr>
											<td>Leonard</td>
											<td>Ellison</td>
											<td>Junior Javascript Developer</td>
											<td>2010/03/19</td>
											<td>$205,500</td>
											<td>l.ellison@datatables.net</td>
										</tr>
										<tr>
											<td>Madeleine</td>
											<td>Lee</td>
											<td>Software Developer</td>
											<td>20015/8/23</td>
											<td>$456,890</td>
											<td>m.lee@datatables.net</td>
										</tr>
										<tr>
											<td>Karen</td>
											<td>Miller</td>
											<td>Office Director</td>
											<td>2012/9/25</td>
											<td>$87,654</td>
											<td>k.miller@datatables.net</td>
										</tr>
										<tr>
											<td>Lisa</td>
											<td>Smith</td>
											<td>Support Lead</td>
											<td>2011/05/21</td>
											<td>$342,000</td>
											<td>l.simth@datatables.net</td>
										</tr>
										<tr>
											<td>Morgan</td>
											<td>Keith</td>
											<td>Accountant</td>
											<td>2012/11/27</td>
											<td>$675,245</td>
											<td>m.keith@datatables.net</td>
										</tr>
										<tr>
											<td>Nathan</td>
											<td>Mills</td>
											<td>Senior Marketing Designer</td>
											<td>2014/10/8</td>
											<td>$765,980</td>
											<td>n.mills@datatables.net</td>
										</tr>
										<tr>
											<td>Ruth</td>
											<td>May</td>
											<td>office Manager</td>
											<td>2010/03/17</td>
											<td>$654,765</td>
											<td>r.may@datatables.net</td>
										</tr>
										<tr>
											<td>Penelope</td>
											<td>Ogden</td>
											<td>Marketing Manager</td>
											<td>2013/5/22</td>
											<td>$345,510</td>
											<td>p.ogden@datatables.net</td>
										</tr>
										<tr>
											<td>Sean</td>
											<td>Piper</td>
											<td>Financial Officer</td>
											<td>2014/06/11</td>
											<td>$725,000</td>
											<td>s.piper@datatables.net</td>
										</tr>
										<tr>
											<td>Trevor</td>
											<td>Ross</td>
											<td>Systems Administrator</td>
											<td>2011/05/23</td>
											<td>$237,500</td>
											<td>t.ross@datatables.net</td>
										</tr>
										<tr>
											<td>Vanessa</td>
											<td>Robertson</td>
											<td>Software Designer</td>
											<td>2014/6/23</td>
											<td>$765,654</td>
											<td>v.robertson@datatables.net</td>
										</tr>
										<tr>
											<td>Una</td>
											<td>Richard</td>
											<td>Personnel Manager</td>
											<td>2014/5/22</td>
											<td>$765,290</td>
											<td>u.richard@datatables.net</td>
										</tr>
										<tr>
											<td>Justin</td>
											<td>Peters</td>
											<td>Development lead</td>
											<td>2013/10/23</td>
											<td>$765,654</td>
											<td>j.peters@datatables.net</td>
										</tr>
										<tr>
											<td>Adrian</td>
											<td>Terry</td>
											<td>Marketing Officer</td>
											<td>2013/04/21</td>
											<td>$543,769</td>
											<td>a.terry@datatables.net</td>
										</tr>
										<tr>
											<td>Cameron</td>
											<td>Watson</td>
											<td>Sales Support</td>
											<td>2013/9/7</td>
											<td>$675,876</td>
											<td>c.watson@datatables.net</td>
										</tr>
										<tr>
											<td>Evan</td>
											<td>Terry</td>
											<td>Sales Manager</td>
											<td>2013/10/26</td>
											<td>$66,340</td>
											<td>d.terry@datatables.net</td>
										</tr>
										<tr>
											<td>Angelica</td>
											<td>Ramos</td>
											<td>Chief Executive Officer</td>
											<td>20017/10/15</td>
											<td>$6,234,000</td>
											<td>a.ramos@datatables.net</td>
										</tr>
										<tr>
											<td>Connor</td>
											<td>Johne</td>
											<td>Web Developer</td>
											<td>2011/1/25</td>
											<td>$92,575</td>
											<td>C.johne@datatables.net</td>
										</tr>
										<tr>
											<td>Jennifer</td>
											<td>Chang</td>
											<td>Regional Director</td>
											<td>2012/17/11</td>
											<td>$546,890</td>
											<td>j.chang@datatables.net</td>
										</tr>
										<tr>
											<td>Brenden</td>
											<td>Wagner</td>
											<td>Software Engineer</td>
											<td>2013/07/14</td>
											<td>$206,850</td>
											<td>b.wagner@datatables.net</td>
										</tr>
										<tr>
											<td>Fiona</td>
											<td>Green</td>
											<td>Chief Operating Officer</td>
											<td>2018/06/23</td>
											<td>$345,789</td>
											<td>f.green@datatables.net</td>
										</tr>
										<tr>
											<td>Shou</td>
											<td>Itou</td>
											<td>Regional Marketing</td>
											<td>2013/07/19</td>
											<td>$335,300</td>
											<td>s.itou@datatables.net</td>
										</tr>
										<tr>
											<td>Michelle</td>
											<td>House</td>
											<td>Integration Specialist</td>
											<td>2016/07/18</td>
											<td>$76,890</td>
											<td>m.house@datatables.net</td>
										</tr>
										<tr>
											<td>Suki</td>
											<td>Burks</td>
											<td>Developer</td>
											<td>2010/11/45</td>
											<td>$678,890</td>
											<td>s.burks@datatables.net</td>
										</tr>
										<tr>
											<td>Prescott</td>
											<td>Bartlett</td>
											<td>Technical Author</td>
											<td>2014/12/25</td>
											<td>$789,100</td>
											<td>p.bartlett@datatables.net</td>
										</tr>
										<tr>
											<td>Gavin</td>
											<td>Cortez</td>
											<td>Team Leader</td>
											<td>2018/1/19</td>
											<td>$345,890</td>
											<td>g.cortez@datatables.net</td>
										</tr>
										<tr>
											<td>Martena</td>
											<td>Mccray</td>
											<td>Post-Sales support</td>
											<td>2011/03/09</td>
											<td>$324,050</td>
											<td>m.mccray@datatables.net</td>
										</tr>
										<tr>
											<td>Unity</td>
											<td>Butler</td>
											<td>Marketing Designer</td>
											<td>2014/7/28</td>
											<td>$34,983</td>
											<td>u.butler@datatables.net</td>
										</tr>
										<tr>
											<td>Howard</td>
											<td>Hatfield</td>
											<td>Office Manager</td>
											<td>2013/8/19</td>
											<td>$98,000</td>
											<td>h.hatfield@datatables.net</td>
										</tr>
										<tr>
											<td>Hope</td>
											<td>Fuentes</td>
											<td>Secretary</td>
											<td>2018/07/28</td>
											<td>$78,879</td>
											<td>h.fuentes@datatables.net</td>
										</tr>
										<tr>
											<td>Vivian</td>
											<td>Harrell</td>
											<td>Financial Controller</td>
											<td>2010/02/14</td>
											<td>$452,500</td>
											<td>v.harrell@datatables.net</td>
										</tr>
										<tr>
											<td>Timothy</td>
											<td>Mooney</td>
											<td>Office Manager</td>
											<td>20016/12/11</td>
											<td>$136,200</td>
											<td>t.mooney@datatables.net</td>
										</tr>
										<tr>
											<td>Jackson</td>
											<td>Bradshaw</td>
											<td>Director</td>
											<td>2011/09/26</td>
											<td>$645,750</td>
											<td>j.bradshaw@datatables.net</td>
										</tr>
										<tr>
											<td>Olivia</td>
											<td>Liang</td>
											<td>Support Engineer</td>
											<td>2014/02/03</td>
											<td>$234,500</td>
											<td>o.liang@datatables.net</td>
										</tr>
										<tr>
											<td>Bruno</td>
											<td>Nash</td>
											<td>Software Engineer</td>
											<td>2018/05/03</td>
											<td>$163,500</td>
											<td>b.nash@datatables.net</td>
										</tr>
										<tr>
											<td>Sakura</td>
											<td>Yamamoto</td>
											<td>Support Engineer</td>
											<td>2010/08/19</td>
											<td>$139,575</td>
											<td>s.yamamoto@datatables.net</td>
										</tr>
										<tr>
											<td>Thor</td>
											<td>Walton</td>
											<td>Developer</td>
											<td>2012/08/11</td>
											<td>$98,540</td>
											<td>t.walton@datatables.net</td>
										</tr>
										<tr>
											<td>Finn</td>
											<td>Camacho</td>
											<td>Support Engineer</td>
											<td>2016/07/07</td>
											<td>$87,500</td>
											<td>f.camacho@datatables.net</td>
										</tr>
										<tr>
											<td>Serge</td>
											<td>Baldwin</td>
											<td>Data Coordinator</td>
											<td>2017/04/09</td>
											<td>$138,575</td>
											<td>s.baldwin@datatables.net</td>
										</tr>
										<tr>
											<td>Zenaida</td>
											<td>Frank</td>
											<td>Software Engineer</td>
											<td>2018/01/04</td>
											<td>$125,250</td>
											<td>z.frank@datatables.net</td>
										</tr>
										<tr>
											<td>Zorita</td>
											<td>Serrano</td>
											<td>Software Engineer</td>
											<td>2017/06/01</td>
											<td>$115,000</td>
											<td>z.serrano@datatables.net</td>
										</tr>
										<tr>
											<td>Jennifer</td>
											<td>Acosta</td>
											<td>Junior Javascript Developer</td>
											<td>2017/02/01</td>
											<td>$75,650</td>
											<td>j.acosta@datatables.net</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div><!-- bd -->
					</div><!-- bd -->
				</div>
				<!--/div-->

				<!--div-->
				<div class="col-xl-12">
					<div class="card mg-b-20">
						<div class="card-header pb-0 pd-t-25">
							<div class="d-flex justify-content-between">
								<h4 class="card-title mg-b-0">Export Table</h4>
							</div>
							<p class="tx-12 text-muted mb-0">Example of Dashfox Bordered Table.. <a href="#">Learn more</a></p>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="example" class="table key-buttons text-md-nowrap">
									<thead>
										<tr>
											<th class="border-bottom-0">Name</th>
											<th class="border-bottom-0">Position</th>
											<th class="border-bottom-0">Office</th>
											<th class="border-bottom-0">Age</th>
											<th class="border-bottom-0">Start date</th>
											<th class="border-bottom-0">Salary</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Tiger Nixon</td>
											<td>System Architect</td>
											<td>Edinburgh</td>
											<td>61</td>
											<td>2011/04/25</td>
											<td>$320,800</td>
										</tr>
										<tr>
											<td>Garrett Winters</td>
											<td>Accountant</td>
											<td>Tokyo</td>
											<td>63</td>
											<td>2011/07/25</td>
											<td>$170,750</td>
										</tr>
										<tr>
											<td>Ashton Cox</td>
											<td>Junior Technical Author</td>
											<td>San Francisco</td>
											<td>66</td>
											<td>2009/01/12</td>
											<td>$86,000</td>
										</tr>
										<tr>
											<td>Cedric Kelly</td>
											<td>Senior Javascript Developer</td>
											<td>Edinburgh</td>
											<td>22</td>
											<td>2012/03/29</td>
											<td>$433,060</td>
										</tr>
										<tr>
											<td>Airi Satou</td>
											<td>Accountant</td>
											<td>Tokyo</td>
											<td>33</td>
											<td>2008/11/28</td>
											<td>$162,700</td>
										</tr>
										<tr>
											<td>Brielle Williamson</td>
											<td>Integration Specialist</td>
											<td>New York</td>
											<td>61</td>
											<td>2012/12/02</td>
											<td>$372,000</td>
										</tr>
										<tr>
											<td>Herrod Chandler</td>
											<td>Sales Assistant</td>
											<td>San Francisco</td>
											<td>59</td>
											<td>2012/08/06</td>
											<td>$137,500</td>
										</tr>
										<tr>
											<td>Rhona Davidson</td>
											<td>Integration Specialist</td>
											<td>Tokyo</td>
											<td>55</td>
											<td>2010/10/14</td>
											<td>$327,900</td>
										</tr>
										<tr>
											<td>Colleen Hurst</td>
											<td>Javascript Developer</td>
											<td>San Francisco</td>
											<td>39</td>
											<td>2009/09/15</td>
											<td>$205,500</td>
										</tr>
										<tr>
											<td>Sonya Frost</td>
											<td>Software Engineer</td>
											<td>Edinburgh</td>
											<td>23</td>
											<td>2008/12/13</td>
											<td>$103,600</td>
										</tr>
										<tr>
											<td>Jena Gaines</td>
											<td>Office Manager</td>
											<td>London</td>
											<td>30</td>
											<td>2008/12/19</td>
											<td>$90,560</td>
										</tr>
										<tr>
											<td>Quinn Flynn</td>
											<td>Support Lead</td>
											<td>Edinburgh</td>
											<td>22</td>
											<td>2013/03/03</td>
											<td>$342,000</td>
										</tr>
										<tr>
											<td>Charde Marshall</td>
											<td>Regional Director</td>
											<td>San Francisco</td>
											<td>36</td>
											<td>2008/10/16</td>
											<td>$470,600</td>
										</tr>
										<tr>
											<td>Haley Kennedy</td>
											<td>Senior Marketing Designer</td>
											<td>London</td>
											<td>43</td>
											<td>2012/12/18</td>
											<td>$313,500</td>
										</tr>
										<tr>
											<td>Tatyana Fitzpatrick</td>
											<td>Regional Director</td>
											<td>London</td>
											<td>19</td>
											<td>2010/03/17</td>
											<td>$385,750</td>
										</tr>
										<tr>
											<td>Michael Silva</td>
											<td>Marketing Designer</td>
											<td>London</td>
											<td>66</td>
											<td>2012/11/27</td>
											<td>$198,500</td>
										</tr>
										<tr>
											<td>Paul Byrd</td>
											<td>Chief Financial Officer (CFO)</td>
											<td>New York</td>
											<td>64</td>
											<td>2010/06/09</td>
											<td>$725,000</td>
										</tr>
										<tr>
											<td>Gloria Little</td>
											<td>Systems Administrator</td>
											<td>New York</td>
											<td>59</td>
											<td>2009/04/10</td>
											<td>$237,500</td>
										</tr>
										<tr>
											<td>Bradley Greer</td>
											<td>Software Engineer</td>
											<td>London</td>
											<td>41</td>
											<td>2012/10/13</td>
											<td>$132,000</td>
										</tr>
										<tr>
											<td>Dai Rios</td>
											<td>Personnel Lead</td>
											<td>Edinburgh</td>
											<td>35</td>
											<td>2012/09/26</td>
											<td>$217,500</td>
										</tr>
										<tr>
											<td>Jenette Caldwell</td>
											<td>Development Lead</td>
											<td>New York</td>
											<td>30</td>
											<td>2011/09/03</td>
											<td>$345,000</td>
										</tr>
										<tr>
											<td>Yuri Berry</td>
											<td>Chief Marketing Officer (CMO)</td>
											<td>New York</td>
											<td>40</td>
											<td>2009/06/25</td>
											<td>$675,000</td>
										</tr>
										<tr>
											<td>Caesar Vance</td>
											<td>Pre-Sales Support</td>
											<td>New York</td>
											<td>21</td>
											<td>2011/12/12</td>
											<td>$106,450</td>
										</tr>
										<tr>
											<td>Doris Wilder</td>
											<td>Sales Assistant</td>
											<td>Sidney</td>
											<td>23</td>
											<td>2010/09/20</td>
											<td>$85,600</td>
										</tr>
										<tr>
											<td>Angelica Ramos</td>
											<td>Chief Executive Officer (CEO)</td>
											<td>London</td>
											<td>47</td>
											<td>2009/10/09</td>
											<td>$1,200,000</td>
										</tr>
										<tr>
											<td>Gavin Joyce</td>
											<td>Developer</td>
											<td>Edinburgh</td>
											<td>42</td>
											<td>2010/12/22</td>
											<td>$92,575</td>
										</tr>
										<tr>
											<td>Jennifer Chang</td>
											<td>Regional Director</td>
											<td>Singapore</td>
											<td>28</td>
											<td>2010/11/14</td>
											<td>$357,650</td>
										</tr>
										<tr>
											<td>Brenden Wagner</td>
											<td>Software Engineer</td>
											<td>San Francisco</td>
											<td>28</td>
											<td>2011/06/07</td>
											<td>$206,850</td>
										</tr>
										<tr>
											<td>Fiona Green</td>
											<td>Chief Operating Officer (COO)</td>
											<td>San Francisco</td>
											<td>48</td>
											<td>2010/03/11</td>
											<td>$850,000</td>
										</tr>
										<tr>
											<td>Shou Itou</td>
											<td>Regional Marketing</td>
											<td>Tokyo</td>
											<td>20</td>
											<td>2011/08/14</td>
											<td>$163,000</td>
										</tr>
										<tr>
											<td>Michelle House</td>
											<td>Integration Specialist</td>
											<td>Sidney</td>
											<td>37</td>
											<td>2011/06/02</td>
											<td>$95,400</td>
										</tr>
										<tr>
											<td>Suki Burks</td>
											<td>Developer</td>
											<td>London</td>
											<td>53</td>
											<td>2009/10/22</td>
											<td>$114,500</td>
										</tr>
										<tr>
											<td>Prescott Bartlett</td>
											<td>Technical Author</td>
											<td>London</td>
											<td>27</td>
											<td>2011/05/07</td>
											<td>$145,000</td>
										</tr>
										<tr>
											<td>Gavin Cortez</td>
											<td>Team Leader</td>
											<td>San Francisco</td>
											<td>22</td>
											<td>2008/10/26</td>
											<td>$235,500</td>
										</tr>
										<tr>
											<td>Martena Mccray</td>
											<td>Post-Sales support</td>
											<td>Edinburgh</td>
											<td>46</td>
											<td>2011/03/09</td>
											<td>$324,050</td>
										</tr>
										<tr>
											<td>Unity Butler</td>
											<td>Marketing Designer</td>
											<td>San Francisco</td>
											<td>47</td>
											<td>2009/12/09</td>
											<td>$85,675</td>
										</tr>
										<tr>
											<td>Howard Hatfield</td>
											<td>Office Manager</td>
											<td>San Francisco</td>
											<td>51</td>
											<td>2008/12/16</td>
											<td>$164,500</td>
										</tr>
										<tr>
											<td>Hope Fuentes</td>
											<td>Secretary</td>
											<td>San Francisco</td>
											<td>41</td>
											<td>2010/02/12</td>
											<td>$109,850</td>
										</tr>
										<tr>
											<td>Vivian Harrell</td>
											<td>Financial Controller</td>
											<td>San Francisco</td>
											<td>62</td>
											<td>2009/02/14</td>
											<td>$452,500</td>
										</tr>
										<tr>
											<td>Timothy Mooney</td>
											<td>Office Manager</td>
											<td>London</td>
											<td>37</td>
											<td>2008/12/11</td>
											<td>$136,200</td>
										</tr>
										<tr>
											<td>Jackson Bradshaw</td>
											<td>Director</td>
											<td>New York</td>
											<td>65</td>
											<td>2008/09/26</td>
											<td>$645,750</td>
										</tr>
										<tr>
											<td>Olivia Liang</td>
											<td>Support Engineer</td>
											<td>Singapore</td>
											<td>64</td>
											<td>2011/02/03</td>
											<td>$234,500</td>
										</tr>
										<tr>
											<td>Bruno Nash</td>
											<td>Software Engineer</td>
											<td>London</td>
											<td>38</td>
											<td>2011/05/03</td>
											<td>$163,500</td>
										</tr>
										<tr>
											<td>Sakura Yamamoto</td>
											<td>Support Engineer</td>
											<td>Tokyo</td>
											<td>37</td>
											<td>2009/08/19</td>
											<td>$139,575</td>
										</tr>
										<tr>
											<td>Thor Walton</td>
											<td>Developer</td>
											<td>New York</td>
											<td>61</td>
											<td>2013/08/11</td>
											<td>$98,540</td>
										</tr>
										<tr>
											<td>Finn Camacho</td>
											<td>Support Engineer</td>
											<td>San Francisco</td>
											<td>47</td>
											<td>2009/07/07</td>
											<td>$87,500</td>
										</tr>
										<tr>
											<td>Serge Baldwin</td>
											<td>Data Coordinator</td>
											<td>Singapore</td>
											<td>64</td>
											<td>2012/04/09</td>
											<td>$138,575</td>
										</tr>
										<tr>
											<td>Zenaida Frank</td>
											<td>Software Engineer</td>
											<td>New York</td>
											<td>63</td>
											<td>2010/01/04</td>
											<td>$125,250</td>
										</tr>
										<tr>
											<td>Zorita Serrano</td>
											<td>Software Engineer</td>
											<td>San Francisco</td>
											<td>56</td>
											<td>2012/06/01</td>
											<td>$115,000</td>
										</tr>
										<tr>
											<td>Jennifer Acosta</td>
											<td>Junior Javascript Developer</td>
											<td>Edinburgh</td>
											<td>43</td>
											<td>2013/02/01</td>
											<td>$75,650</td>
										</tr>
										<tr>
											<td>Cara Stevens</td>
											<td>Sales Assistant</td>
											<td>New York</td>
											<td>46</td>
											<td>2011/12/06</td>
											<td>$145,600</td>
										</tr>
										<tr>
											<td>Hermione Butler</td>
											<td>Regional Director</td>
											<td>London</td>
											<td>47</td>
											<td>2011/03/21</td>
											<td>$356,250</td>
										</tr>
										<tr>
											<td>Lael Greer</td>
											<td>Systems Administrator</td>
											<td>London</td>
											<td>21</td>
											<td>2009/02/27</td>
											<td>$103,500</td>
										</tr>
										<tr>
											<td>Jonas Alexander</td>
											<td>Developer</td>
											<td>San Francisco</td>
											<td>30</td>
											<td>2010/07/14</td>
											<td>$86,500</td>
										</tr>
										<tr>
											<td>Shad Decker</td>
											<td>Regional Director</td>
											<td>Edinburgh</td>
											<td>51</td>
											<td>2008/11/13</td>
											<td>$183,000</td>
										</tr>
										<tr>
											<td>Michael Bruce</td>
											<td>Javascript Developer</td>
											<td>Singapore</td>
											<td>29</td>
											<td>2011/06/27</td>
											<td>$183,000</td>
										</tr>
										<tr>
											<td>Donna Snider</td>
											<td>Customer Support</td>
											<td>New York</td>
											<td>27</td>
											<td>2011/01/25</td>
											<td>$112,000</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!--/div-->

				<!--div-->
				<div class="col-xl-12">
					<div class="card">
						<div class="card-header pb-0 pd-t-25">
							<div class="d-flex justify-content-between">
								<h4 class="card-title mg-b-0">Deleted Selected Row</h4>
							</div>
							<p class="tx-12 text-muted mb-0">Example of Dashfox Hoverable Rows Table.. <a href="#">Learn more</a></p>
						</div>
						<div class="card-body">
							<div class="table-responsive table-relative">
								<button id="button" class="btn btn-primary mg-b-20 data-btn">Delete selected row</button>
								<table id="example-delete" class="table text-md-nowrap">
									<thead>
										<tr>
											<th>Name</th>
											<th>Position</th>
											<th>Office</th>
											<th>Age</th>
											<th>Start date</th>
											<th>Salary</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Tiger Nixon</td>
											<td>System Architect</td>
											<td>Edinburgh</td>
											<td>61</td>
											<td>2011/04/25</td>
											<td>$320,800</td>
										</tr>
										<tr>
											<td>Garrett Winters</td>
											<td>Accountant</td>
											<td>Tokyo</td>
											<td>63</td>
											<td>2011/07/25</td>
											<td>$170,750</td>
										</tr>
										<tr>
											<td>Ashton Cox</td>
											<td>Junior Technical Author</td>
											<td>San Francisco</td>
											<td>66</td>
											<td>2009/01/12</td>
											<td>$86,000</td>
										</tr>
										<tr>
											<td>Cedric Kelly</td>
											<td>Senior Javascript Developer</td>
											<td>Edinburgh</td>
											<td>22</td>
											<td>2012/03/29</td>
											<td>$433,060</td>
										</tr>
										<tr>
											<td>Airi Satou</td>
											<td>Accountant</td>
											<td>Tokyo</td>
											<td>33</td>
											<td>2008/11/28</td>
											<td>$162,700</td>
										</tr>
										<tr>
											<td>Brielle Williamson</td>
											<td>Integration Specialist</td>
											<td>New York</td>
											<td>61</td>
											<td>2012/12/02</td>
											<td>$372,000</td>
										</tr>
										<tr>
											<td>Herrod Chandler</td>
											<td>Sales Assistant</td>
											<td>San Francisco</td>
											<td>59</td>
											<td>2012/08/06</td>
											<td>$137,500</td>
										</tr>
										<tr>
											<td>Rhona Davidson</td>
											<td>Integration Specialist</td>
											<td>Tokyo</td>
											<td>55</td>
											<td>2010/10/14</td>
											<td>$327,900</td>
										</tr>
										<tr>
											<td>Colleen Hurst</td>
											<td>Javascript Developer</td>
											<td>San Francisco</td>
											<td>39</td>
											<td>2009/09/15</td>
											<td>$205,500</td>
										</tr>
										<tr>
											<td>Sonya Frost</td>
											<td>Software Engineer</td>
											<td>Edinburgh</td>
											<td>23</td>
											<td>2008/12/13</td>
											<td>$103,600</td>
										</tr>
										<tr>
											<td>Jena Gaines</td>
											<td>Office Manager</td>
											<td>London</td>
											<td>30</td>
											<td>2008/12/19</td>
											<td>$90,560</td>
										</tr>
										<tr>
											<td>Quinn Flynn</td>
											<td>Support Lead</td>
											<td>Edinburgh</td>
											<td>22</td>
											<td>2013/03/03</td>
											<td>$342,000</td>
										</tr>
										<tr>
											<td>Charde Marshall</td>
											<td>Regional Director</td>
											<td>San Francisco</td>
											<td>36</td>
											<td>2008/10/16</td>
											<td>$470,600</td>
										</tr>
										<tr>
											<td>Haley Kennedy</td>
											<td>Senior Marketing Designer</td>
											<td>London</td>
											<td>43</td>
											<td>2012/12/18</td>
											<td>$313,500</td>
										</tr>
										<tr>
											<td>Tatyana Fitzpatrick</td>
											<td>Regional Director</td>
											<td>London</td>
											<td>19</td>
											<td>2010/03/17</td>
											<td>$385,750</td>
										</tr>
										<tr>
											<td>Michael Silva</td>
											<td>Marketing Designer</td>
											<td>London</td>
											<td>66</td>
											<td>2012/11/27</td>
											<td>$198,500</td>
										</tr>
										<tr>
											<td>Paul Byrd</td>
											<td>Chief Financial Officer (CFO)</td>
											<td>New York</td>
											<td>64</td>
											<td>2010/06/09</td>
											<td>$725,000</td>
										</tr>
										<tr>
											<td>Gloria Little</td>
											<td>Systems Administrator</td>
											<td>New York</td>
											<td>59</td>
											<td>2009/04/10</td>
											<td>$237,500</td>
										</tr>
										<tr>
											<td>Bradley Greer</td>
											<td>Software Engineer</td>
											<td>London</td>
											<td>41</td>
											<td>2012/10/13</td>
											<td>$132,000</td>
										</tr>
										<tr>
											<td>Dai Rios</td>
											<td>Personnel Lead</td>
											<td>Edinburgh</td>
											<td>35</td>
											<td>2012/09/26</td>
											<td>$217,500</td>
										</tr>
										<tr>
											<td>Jenette Caldwell</td>
											<td>Development Lead</td>
											<td>New York</td>
											<td>30</td>
											<td>2011/09/03</td>
											<td>$345,000</td>
										</tr>
										<tr>
											<td>Yuri Berry</td>
											<td>Chief Marketing Officer (CMO)</td>
											<td>New York</td>
											<td>40</td>
											<td>2009/06/25</td>
											<td>$675,000</td>
										</tr>
										<tr>
											<td>Caesar Vance</td>
											<td>Pre-Sales Support</td>
											<td>New York</td>
											<td>21</td>
											<td>2011/12/12</td>
											<td>$106,450</td>
										</tr>
										<tr>
											<td>Doris Wilder</td>
											<td>Sales Assistant</td>
											<td>Sidney</td>
											<td>23</td>
											<td>2010/09/20</td>
											<td>$85,600</td>
										</tr>
										<tr>
											<td>Angelica Ramos</td>
											<td>Chief Executive Officer (CEO)</td>
											<td>London</td>
											<td>47</td>
											<td>2009/10/09</td>
											<td>$1,200,000</td>
										</tr>
										<tr>
											<td>Gavin Joyce</td>
											<td>Developer</td>
											<td>Edinburgh</td>
											<td>42</td>
											<td>2010/12/22</td>
											<td>$92,575</td>
										</tr>
										<tr>
											<td>Jennifer Chang</td>
											<td>Regional Director</td>
											<td>Singapore</td>
											<td>28</td>
											<td>2010/11/14</td>
											<td>$357,650</td>
										</tr>
										<tr>
											<td>Brenden Wagner</td>
											<td>Software Engineer</td>
											<td>San Francisco</td>
											<td>28</td>
											<td>2011/06/07</td>
											<td>$206,850</td>
										</tr>
										<tr>
											<td>Fiona Green</td>
											<td>Chief Operating Officer (COO)</td>
											<td>San Francisco</td>
											<td>48</td>
											<td>2010/03/11</td>
											<td>$850,000</td>
										</tr>
										<tr>
											<td>Shou Itou</td>
											<td>Regional Marketing</td>
											<td>Tokyo</td>
											<td>20</td>
											<td>2011/08/14</td>
											<td>$163,000</td>
										</tr>
										<tr>
											<td>Michelle House</td>
											<td>Integration Specialist</td>
											<td>Sidney</td>
											<td>37</td>
											<td>2011/06/02</td>
											<td>$95,400</td>
										</tr>
										<tr>
											<td>Suki Burks</td>
											<td>Developer</td>
											<td>London</td>
											<td>53</td>
											<td>2009/10/22</td>
											<td>$114,500</td>
										</tr>
										<tr>
											<td>Prescott Bartlett</td>
											<td>Technical Author</td>
											<td>London</td>
											<td>27</td>
											<td>2011/05/07</td>
											<td>$145,000</td>
										</tr>
										<tr>
											<td>Gavin Cortez</td>
											<td>Team Leader</td>
											<td>San Francisco</td>
											<td>22</td>
											<td>2008/10/26</td>
											<td>$235,500</td>
										</tr>
										<tr>
											<td>Martena Mccray</td>
											<td>Post-Sales support</td>
											<td>Edinburgh</td>
											<td>46</td>
											<td>2011/03/09</td>
											<td>$324,050</td>
										</tr>
										<tr>
											<td>Unity Butler</td>
											<td>Marketing Designer</td>
											<td>San Francisco</td>
											<td>47</td>
											<td>2009/12/09</td>
											<td>$85,675</td>
										</tr>
										<tr>
											<td>Howard Hatfield</td>
											<td>Office Manager</td>
											<td>San Francisco</td>
											<td>51</td>
											<td>2008/12/16</td>
											<td>$164,500</td>
										</tr>
										<tr>
											<td>Hope Fuentes</td>
											<td>Secretary</td>
											<td>San Francisco</td>
											<td>41</td>
											<td>2010/02/12</td>
											<td>$109,850</td>
										</tr>
										<tr>
											<td>Vivian Harrell</td>
											<td>Financial Controller</td>
											<td>San Francisco</td>
											<td>62</td>
											<td>2009/02/14</td>
											<td>$452,500</td>
										</tr>
										<tr>
											<td>Timothy Mooney</td>
											<td>Office Manager</td>
											<td>London</td>
											<td>37</td>
											<td>2008/12/11</td>
											<td>$136,200</td>
										</tr>
										<tr>
											<td>Jackson Bradshaw</td>
											<td>Director</td>
											<td>New York</td>
											<td>65</td>
											<td>2008/09/26</td>
											<td>$645,750</td>
										</tr>
										<tr>
											<td>Olivia Liang</td>
											<td>Support Engineer</td>
											<td>Singapore</td>
											<td>64</td>
											<td>2011/02/03</td>
											<td>$234,500</td>
										</tr>
										<tr>
											<td>Bruno Nash</td>
											<td>Software Engineer</td>
											<td>London</td>
											<td>38</td>
											<td>2011/05/03</td>
											<td>$163,500</td>
										</tr>
										<tr>
											<td>Sakura Yamamoto</td>
											<td>Support Engineer</td>
											<td>Tokyo</td>
											<td>37</td>
											<td>2009/08/19</td>
											<td>$139,575</td>
										</tr>
										<tr>
											<td>Thor Walton</td>
											<td>Developer</td>
											<td>New York</td>
											<td>61</td>
											<td>2013/08/11</td>
											<td>$98,540</td>
										</tr>
										<tr>
											<td>Finn Camacho</td>
											<td>Support Engineer</td>
											<td>San Francisco</td>
											<td>47</td>
											<td>2009/07/07</td>
											<td>$87,500</td>
										</tr>
										<tr>
											<td>Serge Baldwin</td>
											<td>Data Coordinator</td>
											<td>Singapore</td>
											<td>64</td>
											<td>2012/04/09</td>
											<td>$138,575</td>
										</tr>
										<tr>
											<td>Zenaida Frank</td>
											<td>Software Engineer</td>
											<td>New York</td>
											<td>63</td>
											<td>2010/01/04</td>
											<td>$125,250</td>
										</tr>
										<tr>
											<td>Zorita Serrano</td>
											<td>Software Engineer</td>
											<td>San Francisco</td>
											<td>56</td>
											<td>2012/06/01</td>
											<td>$115,000</td>
										</tr>
										<tr>
											<td>Jennifer Acosta</td>
											<td>Junior Javascript Developer</td>
											<td>Edinburgh</td>
											<td>43</td>
											<td>2013/02/01</td>
											<td>$75,650</td>
										</tr>
										<tr>
											<td>Cara Stevens</td>
											<td>Sales Assistant</td>
											<td>New York</td>
											<td>46</td>
											<td>2011/12/06</td>
											<td>$145,600</td>
										</tr>
										<tr>
											<td>Hermione Butler</td>
											<td>Regional Director</td>
											<td>London</td>
											<td>47</td>
											<td>2011/03/21</td>
											<td>$356,250</td>
										</tr>
										<tr>
											<td>Lael Greer</td>
											<td>Systems Administrator</td>
											<td>London</td>
											<td>21</td>
											<td>2009/02/27</td>
											<td>$103,500</td>
										</tr>
										<tr>
											<td>Jonas Alexander</td>
											<td>Developer</td>
											<td>San Francisco</td>
											<td>30</td>
											<td>2010/07/14</td>
											<td>$86,500</td>
										</tr>
										<tr>
											<td>Shad Decker</td>
											<td>Regional Director</td>
											<td>Edinburgh</td>
											<td>51</td>
											<td>2008/11/13</td>
											<td>$183,000</td>
										</tr>
										<tr>
											<td>Michael Bruce</td>
											<td>Javascript Developer</td>
											<td>Singapore</td>
											<td>29</td>
											<td>2011/06/27</td>
											<td>$183,000</td>
										</tr>
										<tr>
											<td>Donna Snider</td>
											<td>Customer Support</td>
											<td>New York</td>
											<td>27</td>
											<td>2011/01/25</td>
											<td>$112,000</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th>Name</th>
											<th>Position</th>
											<th>Office</th>
											<th>Age</th>
											<th>Start date</th>
											<th>Salary</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /row -->


		</div>
		<!-- Container closed -->

	</div>
	<!-- main-content closed -->

	<!-- Sidebar-right-->
	<div class="sidebar sidebar-right sidebar-animate">
		<div class="panel panel-primary card mb-0 box-shadow">
			<div class="tab-menu-heading border-0 p-3">
				<div class="card-title mb-0">Notifications</div>
				<div class="card-options ml-auto">
					<a href="#" class="sidebar-remove"><i class="fe fe-x"></i></a>
				</div>
			</div>
			<div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
				<div class="tabs-menu border-bottom">
					<!-- Tabs -->
					<ul class="nav panel-tabs">
						<li class=""><a href="#side1" class="active" data-toggle="tab"><i class="fe fe-user mr-1"></i> Profile</a>
						</li>
						<li><a href="#side2" data-toggle="tab"><i class="fe fe-users mr-1"></i> Contacts</a></li>
						<li><a href="#side3" data-toggle="tab"><i class="fe fe-settings mr-1"></i> Settings</a></li>
					</ul>
				</div>
				<div class="tab-content">
					<div class="tab-pane active" id="side1">
						<div class="card-body text-center">
							<div class="dropdown user-pro-body">
								<div class="">
									<img alt="user-img" class="avatar avatar-xl brround mx-auto text-center"
										src="assets/img/faces/6.jpg"><span class="avatar-status profile-status bg-green"></span>
								</div>
								<div class="user-info mg-t-20">
									<h6 class="font-weight-semibold  mt-2 mb-0">Mintrona Pechon</h6>
									<span class="mb-0 text-muted">Premium Member</span>
								</div>
							</div>
						</div>
						<a class="dropdown-item d-flex pd-y-15 border-bottom border-top" href="#">
							<div class="d-flex"><i class="far fa-user mr-3 tx-20 mg-t-5 text-muted"></i>
								<div>
									<h6 class="mb-0">My Profile</h6>
									<p class="tx-12 mb-0 text-muted">Profile Personal information</p>
								</div>
							</div>
							<div class="ml-auto mg-t-8"><i class="fe fe-chevron-right"></i></div>
						</a>
						<a class="dropdown-item d-flex pd-y-15 border-bottom" href="#">
							<div class="d-flex"><i class="far fa-edit mr-3 tx-20 mg-t-5 text-muted"></i>
								<div>
									<h6 class="mb-0">Edit Profile</h6>
									<p class="tx-12 mb-0 text-muted">Profile Edit information</p>
								</div>
							</div>
							<div class="ml-auto mg-t-8"><i class="fe fe-chevron-right"></i></div>
						</a>
						<a class="dropdown-item d-flex pd-y-15 border-bottom" href="#">
							<div class="d-flex"><i class="far fa-clock mr-3 tx-20 mg-t-5 text-muted"></i>
								<div>
									<h6 class="mb-0">Activity Logs</h6>
									<p class="tx-12 mb-0 text-muted">Activity information</p>
								</div>
							</div>
							<div class="ml-auto mg-t-8"><i class="fe fe-chevron-right"></i></div>
						</a>
						<a class="dropdown-item d-flex pd-y-15 border-bottom" href="#">
							<div class="d-flex"><i class="fas fa-sliders-h mr-3 tx-20 mg-t-5 text-muted"></i>
								<div>
									<h6 class="mb-0">Account Settings</h6>
									<p class="tx-12 mb-0 text-muted">Settings Information</p>
								</div>
							</div>
							<div class="ml-auto mg-t-8"><i class="fe fe-chevron-right"></i></div>
						</a>
						<a class="dropdown-item d-flex pd-y-15 border-bottom" href="signin.html">
							<div class="d-flex"><i class="fas fa-sign-out-alt mr-3 tx-20 mg-t-5 text-muted"></i>
								<div>
									<h6 class="mb-0">Sign Out</h6>
									<p class="tx-12 mb-0 text-muted">Account Signout</p>
								</div>
							</div>
							<div class="ml-auto mg-t-8"><i class="fe fe-chevron-right"></i></div>
						</a>
					</div>
					<div class="tab-pane" id="side2">
						<div class="list-group list-group-flush ">
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/9.jpg"><span
											class="avatar-status bg-success"></span></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
									<p class="mb-0 tx-12 text-muted">mozellebelt@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i
											class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/11.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
									<p class="mb-0 tx-12 text-muted">florindacarasco@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i
											class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/10.jpg"><span
											class="avatar-status bg-success"></span></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
									<p class="mb-0 tx-12 text-muted">alinaaernier@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i
											class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/2.jpg"><span
											class="avatar-status bg-success"></span></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
									<p class="mb-0 tx-12 text-muted">zulamclaughin@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i
											class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/13.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
									<p class="mb-0 tx-12 text-muted">isidroheide@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i
											class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/12.jpg"><span
											class="avatar-status bg-success"></span></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
									<p class="mb-0 tx-12 text-muted">mozellebelt@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/4.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
									<p class="mb-0 tx-12 text-muted">florindacarasco@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i
											class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/7.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
									<p class="mb-0 tx-12 text-muted">alinabernier@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/2.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
									<p class="mb-0 tx-12 text-muted">zulamclaughin@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i
											class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/14.jpg"><span
											class="avatar-status bg-success"></span></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
									<p class="mb-0 tx-12 text-muted">isidroheide@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/11.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
									<p class="mb-0 tx-12 text-muted">florindacarasco@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i
											class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/9.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
									<p class="mb-0 tx-12 text-muted">alinabernier@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i
											class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/15.jpg"><span
											class="avatar-status bg-success"></span></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
									<p class="mb-0 tx-12 text-muted">zulamclaughin@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i
											class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/4.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
									<p class="mb-0 tx-12 text-muted">isidroheide@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i
											class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="side3">
						<a class="dropdown-item bg-gray-100 pd-y-10" href="#">
							Account Settings
						</a>
						<div class="card-body">
							<div class="form-group mg-b-10">
								<label class="custom-switch pl-0">
									<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
									<span class="custom-switch-indicator"></span>
									<span class="custom-switch-description mg-l-10">Updates Automatically</span>
								</label>
							</div>
							<div class="form-group mg-b-10">
								<label class="custom-switch pl-0">
									<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
									<span class="custom-switch-indicator"></span>
									<span class="custom-switch-description mg-l-10">Allow Location Map</span>
								</label>
							</div>
							<div class="form-group mg-b-10">
								<label class="custom-switch pl-0">
									<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
									<span class="custom-switch-indicator"></span>
									<span class="custom-switch-description mg-l-10">Show Contacts</span>
								</label>
							</div>
							<div class="form-group mg-b-10">
								<label class="custom-switch pl-0">
									<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
									<span class="custom-switch-indicator"></span>
									<span class="custom-switch-description mg-l-10">Show Notication</span>
								</label>
							</div>
							<div class="form-group mg-b-10">
								<label class="custom-switch pl-0">
									<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
									<span class="custom-switch-indicator"></span>
									<span class="custom-switch-description mg-l-10">Show Tasks Statistics</span>
								</label>
							</div>
							<div class="form-group mg-b-10">
								<label class="custom-switch pl-0">
									<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
									<span class="custom-switch-indicator"></span>
									<span class="custom-switch-description mg-l-10">Show Email Notification</span>
								</label>
							</div>
						</div>
						<a class="dropdown-item bg-gray-100 pd-y-10" href="#">
							General Settings
						</a>
						<div class="card-body">
							<div class="form-group mg-b-10">
								<label class="custom-switch pl-0">
									<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
									<span class="custom-switch-indicator"></span>
									<span class="custom-switch-description mg-l-10">Show User Online</span>
								</label>
							</div>
							<div class="form-group mg-b-10">
								<label class="custom-switch pl-0">
									<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
									<span class="custom-switch-indicator"></span>
									<span class="custom-switch-description mg-l-10">Website Notication</span>
								</label>
							</div>
							<div class="form-group mg-b-10">
								<label class="custom-switch pl-0">
									<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
									<span class="custom-switch-indicator"></span>
									<span class="custom-switch-description mg-l-10">Show Recent activity</span>
								</label>
							</div>
							<div class="form-group mg-b-10">
								<label class="custom-switch pl-0">
									<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
									<span class="custom-switch-indicator"></span>
									<span class="custom-switch-description mg-l-10">Logout Automatically</span>
								</label>
							</div>
							<div class="form-group mg-b-10">
								<label class="custom-switch pl-0">
									<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
									<span class="custom-switch-indicator"></span>
									<span class="custom-switch-description mg-l-10">Aloow All Notifications</span>
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/Sidebar-right-->

	<!-- Footer opened -->
	<div class="main-footer ht-40">
		<div class="container-fluid pd-t-0-f ht-100p">
			<span>Copyright © 2023 <a href="#">Dashboard</a>. Designed by <a href="#">NIC</a> All rights reserved.</span>
		</div>
	</div>
	<!-- Footer closed -->
	<!-- Back-to-top -->
	<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

	<!-- Jquery js-->
	<script src="assets/plugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap4 js-->
	<script src="assets/plugins/bootstrap/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Ionicons js-->
	<script src="assets/plugins/ionicons/ionicons.js"></script>

	<!-- Moment js -->
	<script src="assets/plugins/moment/moment.js"></script>

	<!-- P-scroll js -->
	<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/p-scroll.js"></script>

	<!-- Sidebar js -->
	<script src="assets/plugins/side-menu/sidemenu.js"></script>

	<!-- Rating js-->
	<script src="assets/plugins/rating/jquery.rating-stars.js"></script>
	<script src="assets/plugins/rating/jquery.barrating.js"></script>

	<!-- Suggestion js-->
	<script src="assets/plugins/suggestion/jquery.input-dropdown.js"></script>
	<script src="assets/js/search.js"></script>

	<!-- Right-sidebar js -->
	<script src="assets/plugins/sidebar/sidebar.js"></script>
	<script src="assets/plugins/sidebar/sidebar-custom.js"></script>

	<!-- Sticky js-->
	<script src="assets/js/sticky.js"></script>

	<!-- eva-icons js -->
	<script src="assets/plugins/eva-icons/eva-icons.min.js"></script>



	<!-- Internal Data tables -->
	<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.responsive.min.js"></script>
	<script src="assets/plugins/datatable/js/responsive.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/js/jquery.dataTables.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.bootstrap4.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
	<script src="assets/plugins/datatable/js/buttons.bootstrap4.min.js"></script>
	<script src="assets/plugins/datatable/js/jszip.min.js"></script>
	<script src="assets/plugins/datatable/js/pdfmake.min.js"></script>
	<script src="assets/plugins/datatable/js/vfs_fonts.js"></script>
	<script src="assets/plugins/datatable/js/buttons.html5.min.js"></script>
	<script src="assets/plugins/datatable/js/buttons.print.min.js"></script>
	<script src="assets/plugins/datatable/js/buttons.colVis.min.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.responsive.min.js"></script>
	<script src="assets/plugins/datatable/js/responsive.bootstrap4.min.js"></script>

	<!--Internal  Datatable js -->
	<script src="assets/js/table-data.js"></script>

	<!-- Internal Select2.min js -->
	<script src="assets/plugins/select2/js/select2.min.js"></script>
	<script src="assets/js/select2.js"></script>


	<!-- custom js -->
	<script src="assets/js/custom.js"></script>

	<!-- Switcher js -->
	<script src="assets/switcher/js/switcher.js"></script>
</body>

</html>