@extends('layout')

@section('title')
	VC Flights
@endsection

@section('content')
	
	<h1 class="fw-bold">All Flights</h1>
	<p>All flights served by <span class="fw-bold">VC Airlines</span></p>
	<table class="table mt-3">
		<thead>
			<tr>
				<th></th>
				<th>Name</th>
				<th>City</th>
				<th>Country</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($airports as $airport)
				<tr>
						<td>{{ $loop->index + 1}}</td>
						<td class="fw-bold">{{ $airport->name }}</td>
						<td>{{ $airport->city }}</td>
						<td>{{ $airport->country }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection