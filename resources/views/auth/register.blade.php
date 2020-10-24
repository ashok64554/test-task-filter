@extends('auth.common') 
@section('title') 
RIMS Hostel | Register 
@endsection 
@section('content')

<style>
	.loginCls {
		color: black;
		font-size: 18px !important;
		margin: auto;
		color: black;
		font-size: 1rem !important;
		font-weight: 700;
	}
</style>
<div class="registerBody">
	<div class="row mt-2">
		<div class="col-6 bgim d-none d-lg-block d-md-block">

		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pl-0">
			<nav class="p-0">
				<div class="nav">
					<a class="nav-item text-center loginCls">New User Registration</a>

					<!-- DB::connection('mysql2')->table('dept')->get() -->
				</div>
			</nav>
			<div class="tab-content p-0" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					<div class="p-2">
						<form action="{{ route('register') }}" method="post" sx class="p-2" onSubmit = "return validate(this)">
							{{ csrf_field() }}
							<div class="form-group">
								<div class="input-group mb-4">
									<div class="input-group-prepend">
										<label for="selectCourse" class="input-group-text" for="selectCourse">Joined As</label>
									</div>
									<select name="joined_as" class="custom-select" required id="selectCourse">
										<option value="" selected>Choose...</option>
										<option value="M.B.B.S. Student" {{ old('joined_as') == 'M.B.B.S. Student' ? 'selected' : '' }}>M.B.B.S. Student</option>
										<option value="Junior Resident" {{ old('joined_as') == 'Junior Residents' ? 'selected' : '' }}>Junior Resident</option>
										<option value="Senior Resident" {{ old('joined_as') == 'Senior Residents' ? 'selected' : '' }}>Senior Resident</option>
										<option value="House Surgeon" {{ old('joined_as') == 'House Surgeon' ? 'selected' : '' }}>House Surgeon</option>
										<option value="M.D." {{ old('joined_as') == 'M.D.' ? 'selected' : '' }}>M.D.</option>
										<option value="M.S." {{ old('joined_as') == 'M.S.' ? 'selected' : '' }}>M.S.</option>
										<option value="M.Ch." {{ old('joined_as') == 'M.Ch.' ? 'selected' : '' }}>M.Ch.</option>
									</select>
								</div>
							</div>
							<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
								<div class="input-group mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text material-icons" id="name">
											person
										</span>
									</div>
									<input value="{{ old('name') }}" type="text" class="form-control" name="name" required placeholder="Full Name" aria-label="FullName"
									 aria-describedby="name">
								</div>
								@if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('dob') ? ' has-error' : '' }}">
								<div class="input-group mb-4">
									<div class="input-group-prepend">
										<label class="input-group-text" for="dob">DOB</label>
									</div>
									<input value="{{old('dob')}}" id="dob" name="dob" type="date" class="form-control" required placeholder="DOB" aria-label="DOB" aria-describedby="dob" max="<?= date('Y-m-d')?>">
								</div>
								@if ($errors->has('dob'))
								<span class="help-block">
									<strong>{{ $errors->first('dob') }}</strong>
								</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('mobile_no') ? ' has-error' : '' }}">
								<div class="input-group mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text material-icons" id="call">
											call
										</span>
									</div>
									<input pattern="[0-9]{10}" value="{{old('mobile_no')}}" name="mobile_no" type="text" class="form-control" required placeholder="Mobile No" maxlength="10"
									 aria-label="Mobile" aria-describedby="mobile_no">
								</div>
								@if ($errors->has('mobile_no'))
								<span class="help-block">
									<strong>{{ $errors->first('mobile_no') }}</strong>
								</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
								<div class="input-group mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text material-icons" id="email">
											email
										</span>
									</div>
									<input value="{{old('email')}}" type="email" class="form-control" required placeholder="E-mail" maxlength="255" aria-label="email"
									 aria-describedby="email" name="email">
								</div>
								@if ($errors->has('email'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
								@endif
							</div>
							<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} ">
								<div class="input-group mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text material-icons" id="basic-addon1">
											vpn_key
										</span>
									</div>
									<input type="password" class="form-control" id="password1" required minlength="6" placeholder="Password"  aria-describedby="password"
									 name="password" value="{{old('password')}}">
								</div>
								@if ($errors->has('password'))
								<span class="help-block">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
								@endif
							</div>
							<div class="form-group ">
								<div class="input-group mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text material-icons" id="basic-addon1">
											vpn_key
										</span>
									</div>
									<input minlength="6" id="password2" type="password" required placeholder="Confirm password" aria-label="password-confirm" id="password-confirm" class="form-control"  name="password_confirmation" aria-describedby="password-confirm" value="{{old('password_confirmation')}}">
								</div>
							</div>
							<div class="row m-auto text-center initOtp ">
								<div class="col-5 m-auto">
									<button type="submit" id="sendOtp" class="btn btn-danger btn-sm text-center">Register
										<i class="fas fa-arrow-circle-right"></i>
									</button>
								</div>
							</div>
							<div class="row mt-2">
								<div class="col-12 m-auto text-center ">
									<p> Already Registred?
										<a href="{{ url('login') }}">Login Here</a>
									</p>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function validate(form) { 
                password1 = form.password.value; 
                password2 = form.password_confirmation.value; 
                if (password1 == '') 
                    alert ("Please enter Password");
                else if (password2 == '') 
                    alert ("Please enter confirm password");
                else if (password1 != password2) { 
                    alert ("\nPassword and Confirm Password did not match: Please try again...") 
                    return false; 
                } 
                else{ 
                    return true; 
                } 
            } 
</script>

@endsection