@extends('layouts.app')

@section('body')
	<section class="heading">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h1>@yield('title')</h1>
				</div>
			</div>	
		</div>
	</section>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						@yield('panel-content')
					</div>
				</div>
			</div>	
		</div>
	</div>	
@endsection