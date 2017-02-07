@extends('spark::layouts.app')

@section('scripts')
	@include('layouts.includes.site-verifications')
	@include('layouts.includes.favicons')
	@include('layouts.includes.tracking-codes')

	@include('includes.person-structured-data-markup')
	@include('includes.website-structured-data-markup')

	<link rel="stylesheet" href="/css/common.css">
	<!-- Page Specific Scripts like CSS, Fonts or Header JavaScript -->
	@stack('header-scripts')

	<meta name="csrf-token" content="{{ csrf_token() }}">

@endsection

@section('content')
	
	@include('layouts.includes.flash-notifications')

		@yield('body')

	@include('layouts.includes.footer')

@endsection

@push('footer-scripts')
<script>
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
</script>
@endpush
<!-- Page Specific Footer Scripts, Generally JavaScript, can be added using the footer-scripts stack -->