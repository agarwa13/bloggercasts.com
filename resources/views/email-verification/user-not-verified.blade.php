@extends('layouts.information')

@section('title','Email Not Verified')

@section('panel-content')

	<p>Hi {{Request::user()->name}},</p>

	<p>
	Before you can view lessons or download printables, you need to verify your email address ({{ Request::user()->email }}). To verify your email address you just need to click on the link in the email we have sent you. Our emails do not usually end up in the spam folder, but if it isn't in your inbox, it is worth checking your spam folder.
	</p>

	<p>
	If you need to change the email address you have provided, you can do that in your <a href="{{url('/settings')}}">settings</a>. We will automatically send you an email verification when you update your email address.
	</p>

	<p>
	If you want us to resend the confirmation email, you can do that by <a href="resend-email-confirmation">clicking here</a>.
	</p>

@endsection