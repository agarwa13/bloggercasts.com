@extends('layouts.information')

@section('title','Confirm Email Address')

@section('panel-content')
	<p>Hi {{Request::user()->name}},</p>

	<p>
	We have sent you another email at {{ Request::user()->email }}. If you click on the link within the email, your account will be activiated and you can enjoy unlimited access to all the videos we have as well as download all our printables.
	</p>

	<p>
	If you need to change the email address you have provided, you can do that in your <a href="{{url('/settings')}}">settings</a>. We will automatically send you an email verification when you update your email address.
	</p>

	<p>
	If you want us to resend the confirmation email, you can do that by <a href="resend-email-confirmation">clicking here</a>.
	</p>

@endsection