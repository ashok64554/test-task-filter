<!doctype html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="./assets/css/style.css">
		<!-- <link rel="stylesheet" href="./assets/css/material-dashboard.min.css"> -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
			crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"
		/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
			crossorigin="anonymous">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script> 
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
			crossorigin="anonymous"></script>

		<title>@yield('title')</title>
	</head>

	<body class="">
		<div class="content">
			<div class="box">
				<div class="row">
					<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 ">
						<div class="row p-4">
							<div class="col-lg-2 col-md-2 col-sm-5 col-xs-5 m-auto text-center">
								<img src="./assets/img/logo.png" alt="" style="width: 80px;">
							</div>
							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 p-0 m-0">
								<h4 id="namebrnd" style="color: red;">राजेन्द्र आयुर्विज्ञान संस्थान, रांची </h4>
								<p class="p-0 m-0" style="color:#000000;">Rajendra Institute of Medical Sciences</p>
								<p class="p-0 m-0 smhide" style="color:#c6c6c6;">An Autonomous Institute under the Govt. of Jharkhand</p>
								<p class="p-0 m-0 smhide" style="color:#c6c6c6;">Ranchi, Jharkhand</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row m-0 text-center titlebg">
					<div class="col-12">
						<h4 class="text-danger text-danger" id="rhmsystl">Rims Hostel Accommodation Management System</h4>
					</div>
				</div>
				<div class="row m-0 ">
					<div class="col-12 p-0">
						<div class=" row m-0 p-0 W-100">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  m-auto">
								<div class="tabs ">
									@if(Session::has('message'))
									<script type="text/javascript">
										var message = "<?php echo Session::get('message') ?>";
										var time = "<?php echo Session::get('time') ?>";
										$.confirm({
											icon: 'fa fa-smile-o',
											autoClose: 'Close|'+time,
											buttons: {
												Close:{
													function(){
													},
													btnClass: 'btn-green'
												}
											},

											title:'Hello',
											content:message,
											theme: 'supervan',
											animation: 'scale',
											type: 'green',
										});
									</script>
									@elseif(Session::has('message1'))
									<script type="text/javascript">
										var message = "<?php echo Session::get('message1') ?>";
										var time = "<?php echo Session::get('time') ?>";
										$.confirm({
											icon: 'fa fa-frown-o',
											autoClose: 'Close|'+time,
											buttons: {
												Close:{
													function(){
													},
													btnClass: 'btn-red'
												}
											},
											title:'Hello',
											content:message,
											theme: 'supervan',
											animation: 'scale',
											type: 'red',
										});
									</script>
									@endif

									@if (count($errors) > 0)
									<script type="text/javascript">
										$(document).ready(function(){
											$.confirm({
												icon: 'fa fa-frown-o',
												autoClose: 'Close|10000',
												buttons: {
													Close:{
														function(){
														},
														btnClass: 'btn-red'
													}
												},
												title:'Hello',
												content:'<div style="font-size:14px;"><ul class="list-unstyled"><?php foreach ($errors->all() as $error){ ?><li><?php echo $error ?></li><?php } ?></ul></div>',
												theme: 'supervan',
												animation: 'scale',
												type: 'red',
											});
										});
									</script>
									@endif

									@yield('content')
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
			crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
			crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
			crossorigin="anonymous"></script>
	</body>

</html>