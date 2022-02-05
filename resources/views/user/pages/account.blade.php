@extends('user.layouts.layoutmaster')
@section('body')
<div class="account">
	<div class="container">
		<h1>Account</h1>
		<div class="account_grid">
			   <div class="col-md-6 login-right">
				<form  class="mt-5 mb-5 login-input" action="{{ route('user.login.post') }}" method="POST">
					@csrf
					<span>Email Address</span>
					<input class="form-control" type="email" id ="email" name="email"  placeholder="Email" autofocus value="{{ old('email') }}"> 
				
					<span>Password</span>
					<input class="form-control" type="password" id = "password" name="password" class="form-control" placeholder="Mật khẩu"> 
					<div class="word-in">
				  		<a class="forgot" href="#">Forgot Your Password?</a>
				 		 <input type="submit" value="Login">
				  	</div>
			    </form>
			   </div>	
			    <div class="col-md-6 login-left">
			  	 <h4>NEW CUSTOMERS</h4>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 <a class="acount-btn" href="register.html">Create an Account</a>
			   </div>
			   <div class="clearfix"> </div>
			 </div>
	</div>
</div>
{{-- <form class="mt-5 mb-5 login-input" action="{{ route('user.login.post') }}" method="POST">
	@csrf
	<div class="form-group">
		<input class="form-control" type="email" id ="email" name="email"  placeholder="Email" autofocus value="{{ old('email') }}">
	</div>
	<div class="form-group">
		<input class="form-control" type="password" id = "password" name="password" class="form-control" placeholder="Mật khẩu">
	</div> 
	<button class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Đăng nhập</button>
  </form> --}}
@endsection