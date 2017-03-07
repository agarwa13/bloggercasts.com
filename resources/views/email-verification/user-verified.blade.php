@extends('layouts.information')

@section('title','Verification Complete')

@section('panel-content')
	<p>Hi @if(Auth::check()) {{Request::user()->name}} @endif,</p>

	<p>
		Your email address has been verified and all features of your account have been activated.
		You can now download any of our printables and other guides.
		You may also watch unlimited number of videoes.
	</p>

	<p>
	To browse the videos series available, <a href="{{url('/series')}}">click here</a>.
	</p>

@endsection