@extends('auth.common')
@section('title')
RIMS Hostel | Login
@endsection
@section('content')

<style>
	.loginCls{
		color:black;
		font-size: 18px !important;
		margin: auto;
		color: black;
		font-size: 1.3rem !important;
		font-weight: 700;
	}

</style>
<div class="loginbody">

	<nav class="bg-danger">
		<div class="nav">
			<a class="nav-item text-center loginCls">DASHBOARD LOGIN</a>
		</div>
	</nav>
	<div class="tab-content" id="nav-tabContent">
		<div class="tab-pane fade show active " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
			<form action="{{ route('login') }}" method="post" class="mt-2 p-3 ml-5 mr-5">
				{{ csrf_field() }}
				<div class="form-group {{ $errors->has('mobile_no') ? ' has-error' : '' }}">
					<div class="input-group mb-4">
						<div class="input-group-prepend">
							<span class="input-group-text material-icons" id="mobile_no">
								call
							</span>
						</div>
						<input type="text" class="form-control" required placeholder="Registered Mobile No" aria-label="Mobile" aria-describedby="mobile_no"  name="mobile_no" value="{{ old('mobile_no') }}" autofocus>
					</div>
					@if ($errors->has('mobile_no'))
					<span class="help-block text-danger">
						<strong>{{ $errors->first('mobile_no') }}</strong>
					</span>
					@endif
				</div>
				<div class="form-group ">
					<div class="input-group mb-4">
						<div class="input-group-prepend">
							<span class="input-group-text material-icons {{ $errors->has('password') ? ' has-error' : '' }}" id="password1">
								vpn_key
							</span>
						</div>
						<input id="password" type="password" class="form-control" name="password" required placeholder="Password" aria-label="FullName" aria-describedby="password">
					</div>
					@if ($errors->has('password'))
					<span class="help-block text-danger">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
					@endif
				</div>
				<div class="form-group text-center mb-0 pb-0">
					<button type="submit" class="btn btn-danger btn-sm" style="color: whitesmoke;"> Login 
					</button>
					<br>
					<a class="btn btn-link" href="{{ route('forgotPassword') }}">
						Forgot Your Password?
					</a>
				</div>
				<div class="row">
					<div class="col-12 m-auto text-center">
						Don't have an account?
						<a href="{{url('register')}}">Sign Up</a>
					</div>

				</div>
			</form>
		</div>
	</div>
</div>
@endsection