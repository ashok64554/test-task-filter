@extends('auth.common') 
@section('title') 
RIMS Hostel | Forgot Password 
@endsection @section('content')

<style>
	.passwordwrap{
		margin:2rem 10rem 5rem 10rem;
		background: linear-gradient(0deg, #1da962a1, #1da962a1);
	}
/* for mobile view start*/
@media (max-width:768px){
	.passwordwrap{
		margin:0px;
	}
}
/* for mobile view end*/
</style>
<div class="passwordwrap">
	<p class="h5 text-danger m-auto text-center">Reset Your Password!</p>
	<form action="{{ route('forgotPassword') }}" method="post" class="mt-2 p-3 ml-5 mr-5">
		{{ csrf_field() }}
		<div class="form-group {{ $errors->has('mobile_no') ? ' has-error' : '' }}">
			<div class="input-group mb-4">
				<div class="input-group-prepend">
					<span class="input-group-text material-icons" id="mobile_no">
						call
					</span>
				</div>
				<input type="tel"  class="form-control w-50" required placeholder="Registered Mobile No" aria-label="Mobile" aria-describedby="mobile_no"
				 name="mobile_no" value="{{ old('mobile_no') }}" autofocus>
			</div>
			@if ($errors->has('mobile_no'))
			<span class="help-block">
				<strong>{{ $errors->first('mobile_no') }}</strong>
			</span>
			@endif
		</div>
		<div class="form-group text-center mb-3">
			<button type="submit" class="btn btn-danger btn-sm" style="color: whitesmoke;"> Send Password </button>
		</div>
	</form>
	<div class="center-align m-auto text-center">
		Don't have an account?
		<a href="{{url('register')}}">Register</a>
	</div>
	<div class="center-align m-auto text-center">Remembered Password?
		<a href="{{ url('login') }}">Login</a>
	</div>


</div>
@endsection