<!doctype html>
<html lang="en">

<!-- Mirrored from www.eakroko.de/neat/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2015 18:11:59 GMT -->
<head>
<meta charset="utf-8">
<title>Neat Admin Template</title>
<meta name="description" content="">

<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="style-toggler">
	<img src="img/icons/fugue/color.png" alt="" class='tip' title="Toggle style-switcher" data-placement="right">
</div>					
<div class="style-switcher">
	<h3>Style-switcher</h3>
	<ul class='color'>
		<li>
			<a href="#" class='style'>Default</a>
		</li>
		<li>
			<a href="#" class='blue'>Blue</a>
		</li>
		<li>
			<a href="#" class='green'>Green</a>
		</li>
		<li>
			<a href="#" class='red'>Red</a>
		</li>
	</ul>
	<h3>Pattern-switcher</h3>
	<ul class='pattern'>
		<li>
			<a href="#" class='default'>Default</a>
		</li>
		<li>
			<a href="#" class='dark'>Dark wood</a>
		</li>
		<li><a href="#" class='light'>Light</a></li>
		<li><a href="#" class='wood'>Wood</a></li>
		<li><a href="#" class='retina-wood'>Retina-wood</a></li>
		<li><a href="#" class='linen'>Linen</a></li>
		<li><a href="#" class='paper'>Paper</a></li>
	</ul>
</div>
<div class="topbar">
	<div class="container-fluid">
		<a href="dashboard.html" class='company'>
		<?php
		mysql_connect("localhost","root","");
		mysql_select_db("oops");
		$result = mysql_query("SELECT * FROM `student` ") or die('Query1 failed: ' . mysql_error());
		$row = mysql_fetch_array($result);
		
		echo $row['NAME'];
		?>
		</a>
		<form action="#">
			<input type="text" value="Search here...">
		</form>
		<ul class='mini'>
			<li class='dropdown dropdown-noclose supportContainer'>
				<a href="#" class='dropdown-toggle' data-toggle="dropdown">
					<img src="img/icons/fugue/book-question.png" alt="">
					Support tickets
					<span class="label label-warning">5</span>
				</a>
				<ul class="dropdown-menu pull-right custom custom-dark">
					<li class='custom'>
						<div class="title">
							What is the question?
							<span>Jul 22, 2012 by <a href="#" class='pover' data-title="Hover me" data-content="User information comes here">Hover me</a></span>
						</div>
						<div class="action">
							<div class="btn-group">
								<a href="#" class='tip btn btn-mini' title="Show ticket"><img src="img/icons/fugue/magnifier.png" alt=""></a>
								<a href="#" class='tip btn btn-mini' title="Delete ticket"><img src="img/icons/fugue/cross.png" alt=""></a>
							</div>
						</div>
					</li>
					<li class='custom'>
						<div class="title">
							How can i do this and that?
							<span>Jul 19, 2012 by <a href="#" class='pover' data-title="Username" data-content="User information comes here">Username</a></span>
						</div>
						<div class="action">
							<div class="btn-group">
								<a href="#" class='tip btn btn-mini' title="Show ticket"><img src="img/icons/fugue/magnifier.png" alt=""></a>
								<a href="#" class='tip btn btn-mini' title="Delete ticket"><img src="img/icons/fugue/cross.png" alt=""></a>
							</div>
						</div>
					</li>
					<li class='custom'>
						<div class="title">
							I want more support tickets!
							<span>Jul 19, 2012 by <a href="#" class='pover' data-title="Lorem" data-content="User information comes here">Lorem</a></span>
						</div>
						<div class="action">
							<div class="btn-group">
								<a href="#" class='tip btn btn-mini' title="Show ticket"><img src="img/icons/fugue/magnifier.png" alt=""></a>
								<a href="#" class='tip btn btn-mini' title="Delete ticket"><img src="img/icons/fugue/cross.png" alt=""></a>
							</div>
						</div>
					</li>
					<li class='custom custom-hidden'>
						<div class="title">
							This is a great feature, BUT...
							<span>Jul 18, 2012 by <a href="#" class='pover' data-title="Lorem" data-content="User information comes here">Ipsum</a></span>
						</div>
						<div class="action">
							<div class="btn-group">
								<a href="#" class='tip btn btn-mini' title="Show ticket"><img src="img/icons/fugue/magnifier.png" alt=""></a>
								<a href="#" class='tip btn btn-mini' title="Delete ticket"><img src="img/icons/fugue/cross.png" alt=""></a>
							</div>
						</div>
					</li>
					<li class='custom custom-hidden'>
						<div class="title">
							I want more colors! How?
							<span>Jul 16, 2012 by <a href="#" class='pover' data-title="Lorem" data-content="User information comes here">Lorem</a></span>
						</div>
						<div class="action">
							<div class="btn-group">
								<a href="#" class='tip btn btn-mini' title="Show ticket"><img src="img/icons/fugue/magnifier.png" alt=""></a>
								<a href="#" class='tip btn btn-mini' title="Delete ticket"><img src="img/icons/fugue/cross.png" alt=""></a>
							</div>
						</div>
					</li>
					<li class="custom">
						<div class="expand_custom">
							<a href="#">Show all support tickets</a>
						</div>
					</li>
				</ul>
			</li>
			<li class='dropdown pendingContainer'>
				<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
					<img src="img/icons/fugue/document-task.png" alt="">
					Pending orders
					<span class="label label-important">1</span>
				</a>
				<ul class="dropdown-menu pull-right custom custom-dark">
					<li class='custom'>
						<div class="title">
							Pending order #1 
							<span>Jul 22, 2012 by <a href="#" class='pover' data-title="Hover me" data-content="User information comes here">Hover me</a></span>
						</div>
						<div class="action">
							<div class="btn-group">
								<a href="#" class='tip btn btn-mini' title="Show order"><img src="img/icons/fugue/magnifier.png" alt=""></a>
								<a href="#" class='tip btn btn-mini' title="Delete order"><img src="img/icons/fugue/cross.png" alt=""></a>
							</div>
						</div>
					</li>
				</ul>
			</li>
			<li class='dropdown messageContainer'>
				<a href="#" class='dropdown-toggle' data-toggle='dropdown'>
					<img src="img/icons/fugue/balloons-white.png" alt="">
					Messages
					<span class="label label-info">3</span>
				</a>
				<ul class="dropdown-menu pull-right custom custom-dark">
					<li class='custom'>
						<div class="title">
							Hello, whats your name?
							<span>Jul 22, 2012 by <a href="#" class='pover' data-title="Hover me" data-content="User information comes here">Hover me</a></span>
						</div>
						<div class="action">
							<div class="btn-group">
								<a href="#" class='tip btn btn-mini' title="Show message"><img src="img/icons/fugue/magnifier.png" alt=""></a>
								<a href="#" class='tip btn btn-mini' title="Reply message"><img src="img/icons/fugue/mail-reply.png" alt=""></a>
							</div>
						</div>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">
					<img src="img/icons/fugue/gear.png" alt="">
					Settings
				</a>
			</li>
			<li>
				<a href="index-2.html">
					<img src="img/icons/fugue/control-power.png" alt="">
					Logout
				</a>
			</li>
		</ul>
	</div>
</div>
<div class="breadcrumbs">
	<div class="container-fluid">
		<ul class="bread pull-left">
			<li>
				<a href="dashboard.html"><i class="icon-home icon-white"></i></a>
			</li>
			<li>
				<a href="dashboard.html">
					Dashboard
				</a>
			</li>
		</ul>

	</div>
</div>
<div class="main">
	<div class="container-fluid">
	<div class="navi">
		<ul class='main-nav'>
			<li class='active'>
				<a href="dashboard.html" class='light'>
					<div class="ico"><i class="icon-home icon-white"></i></div>
					Dashboard
					<span class="label label-warning">10</span>
				</a>
			</li>
			<li>
				<a href="forms.html" class='light'>
					<div class="ico"><i class="icon-list icon-white"></i></div>
					Forms
					<span class="label label-info">1</span>
				</a>
			</li>
			<li>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-th-large icon-white"></i></div>
					Tables
					<img src="img/toggle-subnav-down.png" alt="">
				</a>
				<ul class='collapsed-nav closed'>
					<li>
						<a href="datatables.html">
							Data Tables
						</a>
					</li>
					<li>
						<a href="plaintables.html">
							Plain Tables
						</a>
					</li>
					<li>
						<a href="mediatables.html">
							Media Tables
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-tasks icon-white"></i></div>
					Interface Elements
					<img src="img/toggle-subnav-down.png" alt="">
				</a>
				<ul class='collapsed-nav closed'>
					<li>
						<a href="buttons.html">
							Buttons & Icons
						</a>
					</li>
					<li>
						<a href="sliders.html">
							Sliders & Progress-Bars
						</a>
					</li>
					<li>
						<a href="tooltips.html">
							Tooltips, Alerts & Notification
						</a>
					</li>
					<li>
						<a href="tabs.html">
							Tabs, Pills & Accordion
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="statistics.html" class='light'>
					<div class="ico"><i class="icon-signal icon-white"></i></div>
					Statistics
					<span class="label label-important">3</span>
				</a>
			</li>
			<li>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-exclamation-sign icon-white"></i></div>
					Error Pages
					<img src="img/toggle-subnav-down.png" alt="">
				</a>
				<ul class='collapsed-nav closed'>
					<li>
						<a href="403.html">
							403
						</a>
					</li>
					<li>
						<a href="404.html">
							404
						</a>
					</li>
					<li>
						<a href="500.html">
							500
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-book icon-white"></i></div>
					Sample Pages
					<img src="img/toggle-subnav-down.png" alt="">
				</a>
				<ul class='collapsed-nav closed'>
					<li>
						<a href="gallery.html">
							Gallery
						</a>
					</li>
					<li>
						<a href="messages.html">
							Messages
						</a>
					</li>
					<li>
						<a href="userprofile.html">
							User Profile
						</a>
					</li>
					<li>
						<a href="index-2.html">
							Login
						</a>
					</li>
					<li>
						<a href="results.html">
							Search results
						</a>
					</li>
					<li>
						<a href="view.html">
							View form
						</a>
					</li>
					<li>
						<a href="invoice.html">
							Invoice
						</a>
					</li>
					<li>
						<a href="navigation_hover.html">
							Navigation expand on hover
						</a>
					</li>
					<li>
						<a href="calendar.html">Calendar</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-resize-full icon-white"></i></div>
					Layouts
					<img src="img/toggle-subnav-down.png" alt="">
				</a>
				<ul class='collapsed-nav closed'>
					<li>
						<a href="#" class='set-liquid'>
							Liquid
						</a>
					</li>
					<li>
						<a href="#" class='set-fixed'>
							Fixed
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="content">
			<div class="row-fluid no-margin">
				<div class="span12">
							<ul class="quickstats">
								<li>
									<div class="small-chart" data-color="6a9d29" data-stroke="345010" data-type="line">5,3,9,6,5,9,7,3,5,10</div>
									<div class="chart-detail">
										<span class="amount green">+ 9834.41 $</span>
										<span class="description">Current balance</span>
									</div>
								</li>
								<li>
									<div class="small-chart" data-color="2c5b96" data-stroke="102c50" data-type="bar">2,5,4,6,5,4,7,8</div>
									<div class="chart-detail">
										<span class="amount">128.32</span>
										<span class="description">Orders per month</span>
									</div>
								</li>
								<li>
									<div class="small-chart" data-color="962c2c" data-stroke="651111" data-type="pie">6/10</div>
									<div class="chart-detail">
										<span class="amount">60%</span>
										<span class="description">Member qoute</span>
									</div>
								</li>
								<li>
									<div class="small-chart" data-color="2c5b96" data-stroke="102c50" data-type="line">521,500,481,429,550,521</div>
									<div class="chart-detail">
										<span class="amount">521.3 / month</span>
										<span class="description">Unique visitors rate</span>
									</div>
								</li>
							</ul>
						
				</div>
			</div>
			<div class="row-fluid no-margin">
				<div class="span12">
					
							<ul class="quicktasks">
								<li>
									<a href="#">
										<img src="img/icons/essen/32/order-149.png" alt="">
										<span>Check orders</span>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/icons/essen/32/calendar.png" alt="">
										<span>Upcoming events</span>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/icons/essen/32/basket.png" alt="">
										<span>New product</span>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/icons/essen/32/communication.png" alt="">
										<span>Support tickets</span>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/icons/essen/32/hire-me.png" alt="">
										<span>Approve user</span>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/icons/essen/32/full-time.png" alt="">
										<span>Manage cronjobs</span>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/icons/essen/32/invoice.png" alt="">
										<span>Invoices</span>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/icons/essen/32/bank.png" alt="">
										<span>Balance</span>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/icons/essen/32/statistics.png" alt="">
										<span>Site statistics</span>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/icons/essen/32/shipping.png" alt="">
										<span>Check shipping</span>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/icons/essen/32/bestseller.png" alt="">
										<span>Bestseller</span>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/icons/essen/32/config.png" alt="">
										<span>Configuration</span>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/icons/essen/32/heart.png" alt="">
										<span>My Favourites</span>
									</a>
								</li>
							</ul>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="box">
						<div class="box-head">
							<h3>Charts</h3>
							<div class="actions">
								<ul>
									<li class="dropdown">
										<a href="#" class='btn btn-mini dropdown-toggle' data-toggle="dropdown">
											<img src="img/icons/fugue/gear.png" alt="">
										</a>
										<ul class="dropdown-menu pull-right custom">
											<li>
												<a href="#" class='fugue'><img src="img/icons/fugue/printer.png" alt=""> Print chart</a>
											</li>	
											<li class="divider"></li>
											<li>
												<a href="#" class='fugue'><img src="img/icons/fugue/gear.png" alt=""> Chart settings</a>
											</li>
											<li>
												<a href="#" class='fugue'><img src="img/icons/fugue/bin-metal.png" alt=""> Delete chart</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#" class='btn btn-mini tip' title="Save this chart">
											<img src="img/icons/fugue/disk-black.png" alt="">
										</a>
									</li>
								</ul>	
							</div>
						</div>
						<div class="box-content">
							<div class="flot flot-line"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<div class="box">
						<div class="box-head">
							<h3>Recent purchases</h3>
						</div>
						<div class="box-content box-nomargin"><div class="alert alert-error">
						<strong>Feature!</strong> Check this awesome custom animation. Click in the table on <strong>'mark as pending'</strong> (2nd action button) !
					</div>
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Customer</th>
										<th>Product</th>
										<th class='mobile-hide'>Date</th>
										<th>Income</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<a href="#" data-title="Lorem ipsum" data-content="Here is some lorem ipsum content">Lorem ipsum</a>
										</td>
										<td>
											The awesome shirt
										</td>
										<td class='mobile-hide'>
											Jul 21, 2012
										</td>
										<td class='green'>
											+ 21,4 $
										</td>
										<td class='actions'>
											<div class="btn-group">
												<a href="#" class='btn btn-mini tip' title="Show details">
													<img src="img/icons/fugue/magnifier.png" alt="">
												</a>
												<a href="#" class='btn btn-mini tip animateRow' data-target=".pendingContainer" data-user='1' data-date='3' data-title='2' title="Mark as pending">
													<img src="img/icons/fugue/document-task.png" alt="">
												</a>
												<a href="#" class='btn btn-mini tip deleteRow' title="Remove">
													<img src="img/icons/fugue/cross.png" alt="">
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<a href="#" data-title="Lorem ipsum" data-content="Content of Takimata ... bla">Takimata</a>
										</td>
										<td>
											Water
										</td>
										<td class='mobile-hide'>
											Jul 20, 2012
										</td>
										<td class='green'>
											+ 1,75 $
										</td>
										<td class='actions'>
											<div class="btn-group">
												<a href="#" class='btn btn-mini tip' title="Show details">
													<img src="img/icons/fugue/magnifier.png" alt="">
												</a>
												<a href="#" class='btn btn-mini tip animateRow' data-target=".pendingContainer" data-user='1' data-date='3' data-title='2' title="Mark as pending">
													<img src="img/icons/fugue/document-task.png" alt="">
												</a>
												<a href="#" class='btn btn-mini tip deleteRow' title="Remove">
													<img src="img/icons/fugue/cross.png" alt="">
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<a href="#" data-title="Lorem ipsum" data-content="Content of Accusam">Accusam</a>
										</td>
										<td>
											Headset
										</td>
										<td class='mobile-hide'>
											Jul 21, 2012
										</td>
										<td class='green'>
											+ 61,91 $
										</td>
										<td class='actions'>
											<div class="btn-group">
												<a href="#" class='btn btn-mini tip' title="Show details">
													<img src="img/icons/fugue/magnifier.png" alt="">
												</a>
												<a href="#" class='btn btn-mini tip animateRow' data-target=".pendingContainer" data-user='1' data-date='3' data-title='2' title="Mark as pending">
													<img src="img/icons/fugue/document-task.png" alt="">
												</a>
												<a href="#" class='btn btn-mini tip deleteRow' title="Remove">
													<img src="img/icons/fugue/cross.png" alt="">
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<a href="#" data-title="Lorem ipsum" data-content="Content of Consetetur">Consetetur</a>
										</td>
										<td>
											LCD TV
										</td>
										<td class='mobile-hide'>
											Jul 20, 2012
										</td>
										<td class='green'>
											+ 739,99 $
										</td>
										<td class='actions'>
											<div class="btn-group">
												<a href="#" class='btn btn-mini tip' title="Show details">
													<img src="img/icons/fugue/magnifier.png" alt="">
												</a>
												<a href="#" class='btn btn-mini tip animateRow' data-target=".pendingContainer" data-user='1' data-date='3' data-title='2' title="Mark as pending">
													<img src="img/icons/fugue/document-task.png" alt="">
												</a>
												<a href="#" class='btn btn-mini tip deleteRow' title="Remove">
													<img src="img/icons/fugue/cross.png" alt="">
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<a href="#" data-title="Lorem ipsum" data-content="Content of Vero">Vero</a>
										</td>
										<td>
											Keyboard
										</td>
										<td class='mobile-hide'>
											Jul 19, 2012
										</td>
										<td class='green'>
											+ 99,99 $
										</td>
										<td class='actions'>
											<div class="btn-group">
												<a href="#" class='btn btn-mini tip' title="Show details">
													<img src="img/icons/fugue/magnifier.png" alt="">
												</a>
												<a href="#" class='btn btn-mini tip animateRow' data-target=".pendingContainer" data-user='1' data-date='3' data-title='2' title="Mark as pending">
													<img src="img/icons/fugue/document-task.png" alt="">
												</a>
												<a href="#" class='btn btn-mini tip deleteRow' title="Remove">
													<img src="img/icons/fugue/cross.png" alt="">
												</a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="span6">
					<div class="box">
						<div class="box-head">
							<h3>Messages</h3>
							<span class="label label-info">3</span>
						</div>
						<div class="box-content">
							<ul class="messages">
								<li class="user1">
									<a href="#"><img src="img/sample/40.gif" alt=""></a>
									<div class="info">
										<span class="arrow"></span>
										<div class="detail">
											<span class="sender">
												<strong>Username</strong> says:
											</span>
											<span class="time">15 minutes ago</span>
										</div>
										<div class="message">
											<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
										</div>
									</div>
								</li>
								<li class="user2">
									<a href="#"><img src="img/sample/40.gif" alt=""></a>
									<div class="info">
										<span class="arrow"></span>
										<div class="detail">
											<span class="sender">
												<strong>Username</strong> says:
											</span>
											<span class="time">15 minutes ago</span>
										</div>
										<div class="message">
											<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum..</p>
											<p>
												At vero eos et accusam et justo duo dolores et ea rebum.
											</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span9">
					<div class="box">
						<div class="box-head">
							<h3>Mini Gallery</h3>
						</div>
						<div class="box-content box-nomargin">
							<ul class="gallery">
								<li>
									<a href="img/sample/500.gif" class="fancy"><img src="img/sample/60.gif" alt=""></a>
								</li>
								<li>
									<a href="img/sample/500.gif" class="fancy"><img src="img/sample/60.gif" alt=""></a>
								</li>
								<li>
									<a href="img/sample/500.gif" class="fancy"><img src="img/sample/60.gif" alt=""></a>
								</li>
								<li>
									<a href="img/sample/500.gif" class="fancy"><img src="img/sample/60.gif" alt=""></a>
								</li>
								<li>
									<a href="img/sample/500.gif" class="fancy"><img src="img/sample/60.gif" alt=""></a>
								</li>
								<li>
									<a href="img/sample/500.gif" class="fancy"><img src="img/sample/60.gif" alt=""></a>
								</li>
								<li>
									<a href="img/sample/500.gif" class="fancy"><img src="img/sample/60.gif" alt=""></a>
								</li>
								<li>
									<a href="img/sample/500.gif" class="fancy"><img src="img/sample/60.gif" alt=""></a>
								</li>
								<li>
									<a href="img/sample/500.gif" class="fancy"><img src="img/sample/60.gif" alt=""></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="box">
						<div class="box-head">
							<h3>Gallery with details</h3>
						</div>
						<div class="box-content box-nomargin">
							<ul class="gallery gallery-detail">
								<li>
									<a href="img/sample/500.gif" class="fancy"><img src="img/sample/100.gif" alt=""></a>
									<div class="info">
										<span>100 KB</span>
										<span>Jan 31, 2012</span>
									</div>
								</li>
								<li>
									<a href="img/sample/500.gif" class="fancy"><img src="img/sample/100.gif" alt=""></a>
									<div class="info">
										<span>100 KB</span>
										<span>Jan 31, 2012</span>
									</div>
								</li>
								<li>
									<a href="img/sample/500.gif" class="fancy"><img src="img/sample/100.gif" alt=""></a>
									<div class="info">
										<span>100 KB</span>
										<span>Jan 31, 2012</span>
									</div>
								</li>
								<li>
									<a href="img/sample/500.gif" class="fancy"><img src="img/sample/100.gif" alt=""></a>
									<div class="info">
										<span>100 KB</span>
										<span>Jan 31, 2012</span>
									</div>
								</li>
								<li>
									<a href="img/sample/500.gif" class="fancy"><img src="img/sample/100.gif" alt=""></a>
									<div class="info">
										<span>100 KB</span>
										<span>Jan 31, 2012</span>
									</div>
								</li>
								<li>
									<a href="img/sample/500.gif" class="fancy"><img src="img/sample/100.gif" alt=""></a>
									<div class="info">
										<span>100 KB</span>
										<span>Jan 31, 2012</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="box">
						<div class="box-head">
							<h3>Comments</h3>
						</div>
						<div class="box-content box-nomargin">
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Comment</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Consetetur sadipscing elitr</td>
										<td class='actions_two'>
											<div class="btn-group">
												<a href="#" class="btn btn-mini tip" title="Rate"><img src="img/icons/fugue/star.png" alt=""></a>
												<a href="#" class='btn btn-mini tip' title="Block"><img src="img/icons/fugue/slash.png" alt=""></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>Lorem ipsum est aliquip laboris amet aliqua laboris laborum fugiat aute aliquip in est quis nulla elit sit. </td>
										<td class='actions_two'>
											<div class="btn-group">
												<a href="#" class="btn btn-mini tip" title="Rate"><img src="img/icons/fugue/star.png" alt=""></a>
												<a href="#" class='btn btn-mini tip' title="Block"><img src="img/icons/fugue/slash.png" alt=""></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>Lorem ipsum dolor sed sed quis Excepteur non. </td>
										<td class='actions_two'>
											<div class="btn-group">
												<a href="#" class="btn btn-mini tip" title="Rate"><img src="img/icons/fugue/star.png" alt=""></a>
												<a href="#" class='btn btn-mini tip' title="Block"><img src="img/icons/fugue/slash.png" alt=""></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>Lorem ipsum est sunt dolor officia exercitation ut sed ut. </td>
										<td class='actions_two'>
											<div class="btn-group">
												<a href="#" class="btn btn-mini tip" title="Rate"><img src="img/icons/fugue/star.png" alt=""></a>
												<a href="#" class='btn btn-mini tip' title="Block"><img src="img/icons/fugue/slash.png" alt=""></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>	
<script src="js/jquery.js"></script>
<script src="js/less.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.peity.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.flot.js"></script>
<script src="js/jquery.color.js"></script>
<script src="js/jquery.flot.resize.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/custom.js"></script><script src="js/demo.js"></script>
</body>

<!-- Mirrored from www.eakroko.de/neat/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2015 18:12:13 GMT -->
</html>