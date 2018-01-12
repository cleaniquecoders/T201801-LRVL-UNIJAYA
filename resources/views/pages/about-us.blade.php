@extends('layouts.app')

@section('content')
	<h1>About Us</h1>

	<p>Cleanique Coders is an IT Training Provider</p>

	@include('pages.sections.vision')

	@include('pages.sections.mission')

	@component('components.table')
		@slot('thead')
			<tr>
				<th>Name</th>
				<th>E-mail</th>
				<th>Actions</th>
			</tr>
		@endslot
		@slot('tbody')
			<tr>
				<td>{{ auth()->user()->name }}</td>
				<td>{{ auth()->user()->email }}</td>
				<td>
					@component('components.actions')
						@slot('prepend_actions')
						<a class="btn btn-default btn-sm" href="">action a</a>
						<a class="btn btn-default btn-sm" href="">action b</a>
						@endslot

						@slot('append_actions')
						<a class="btn btn-default btn-sm" href="">action c</a>
						<a class="btn btn-default btn-sm" href="">action d</a>
						@endslot
					@endcomponent
				</td>
			</tr>
		@endslot
	@endcomponent

@endsection

@section('content-again')
	<div class="well">some other content</div>
@endsection
