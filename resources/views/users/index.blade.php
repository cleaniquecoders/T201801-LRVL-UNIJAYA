@extends('layouts.app')

@section('content')
	<div class="pull-right">
		{{ $users->links() }}
	</div>
	{{-- <div class="col-md-3">
		Per Page:
		<select name="perPage" id="" class="form-control">
			@foreach([15,30,45,60,75,100] as $perPage)
				<option value="{{ $perPage }}">{{ $perPage }}</option>
			@endforeach
		</select>
	</div> --}}
	@component('components.table')
		@slot('thead')
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>E-mail</th>
				<th>Actions</th>
			</tr>
		@endslot
		@slot('tbody')
			@forelse($users as $key => $user)
				<tr>
					<td>
					{{
					($users->currentPage() * $users->perPage() - $users->perPage())+($key+1)
					}}
				</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>
						@include('components.actions')
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="3">
						<center>No users available</center>
					</td>
				</tr>
			@endforelse
		@endslot
	@endcomponent
@endsection
