@extends('admin')


@section('content')
	<div class="columns">
		<div class="column is-three-quarters">
			<div class="block">
			  <a href="{{ URL::to('/server/jobs/create') }}" class="button is-primary">Create New Job</a>
			</div>
		</div>
	</div>
@endsection