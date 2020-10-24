@extends('user.common')
@section('title')
User- Dashboard
@endsection
@section('content')
<div class="row desktopTabs">
	<div class="col-lg-3 col-md-6 col-sm-6 col-xs-5">
		<div class="card card-stats tablinks active">
			<div class="card-header card-header-warning card-header-icon">
				<div class="card-icon">
					<i class="material-icons">account_balance_wallet</i>
				</div>
				<p class="card-category">Your Dashbords</p>
				<h3 class="card-title">
					<br> DASHBOARD
					<!-- <small>GB</small> -->
				</h3>
			</div>
			<div class="card-footer">
				<div class="stats">
					<i class="material-icons text-danger">dashboard</i>
					<a href="javascript:;"> </a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-6 col-xs-5">
		<a  href="{{route('user.trackAccommodation')}}">
			<div class="card card-stats tablinks" onclick="openCity(event, 'Tokyo')">
				<div class="card-header card-header-danger card-header-icon">
					<div class="card-icon">
						<i class="material-icons">history</i>
					</div>
					<p class="card-category">Your Details</p>
					<h3 class="card-title"><br>

					Track Details</h3>
				</div>
				<div class="card-footer">
					<div class="stats">
						<i class="material-icons">history</i> See your Current & Previous Hostel
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-6 col-xs-5">
		<a  href="{{route('user.hostelChangeRequest')}}">
			<div class="card card-stats tablinks" onclick="openCity(event, 'Mumbai')">
				<div class="card-header card-header-success card-header-icon">
					<div class="card-icon">
						<i class="material-icons">group</i>
					</div>
					<p class="card-category">Hostel Change</p>
					<h3 class="card-title"><br> Hostel Change</h3>
				</div>
				<div class="card-footer">
					<div class="stats">
						<i class="material-icons">house</i>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-6 col-xs-5">
		<div class="card card-stats tablinks" onclick="openCity(event, 'Delhi')">
			<a  href="{{route('user.accountUpdate')}}">
				<div class="card-header card-header-info card-header-icon">
					<div class="card-icon">
						<i class="material-icons">person</i>
					</div>
					<p class="card-category">Manage</p>
					<h3 class="card-title">
						<br>Profile
					</h3>
				</div>
				<div class="card-footer">
					<div class="stats">
						<i class="material-icons">update</i> Update Profile
					</div>
				</div>
			</a>
		</div>
	</div>
</div>



<!-- start of top 4 tabs book now and dashbord n all -->
<!-- <div class="row" style="border-bottom:2px solid brown; border-top: 2px solid brown;" >
	<div class="col-lg-10 col-md-10 col-sm-10 p-5 m-auto">
		<h4 class="hostel text-center">Letest Update & News</h4>
		<span class="headerLine"></span>
		<div class="containe">
			<ul id="element1" class="list-group list-group-flush listCustom mt-3" style="font-family: -webkit-pictograph; ">
				<li class="list-group-item" data-aos="fade-up">Extension of Last date of Bid submission of open Tender
					<span style="color: brown">[more>>]</span>
				</li>
				<li class="list-group-item" data-aos="fade-up">Guidelines/Action- plans for resumption of various activities
					<span style="color: brown">[more>>]</span>
				</li>
				<li class="list-group-item" data-aos="fade-up">Admission schedule and advertisement for ADC 2020
					<span style="color: brown">[more>>]</span>
				</li>
				<li class="list-group-item" data-aos="fade-up">BID submission of the following limited tender
					<span style="color: brown">[more>>]</span>
				</li>
				<li class="list-group-item" data-aos="fade-up">Extension Notice for Bid Submission of Limited Tender
					<span style="color: brown">[more>>]</span>
				</li>
			</ul>
		</div>
	</div>
</div> -->
@endsection