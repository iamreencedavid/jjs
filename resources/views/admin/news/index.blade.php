@extends('admin')


@section('content')
	<div class="columns">
		<div class="column is-three-quarters">
			<div class="block">
			  <a href="{{ URL::to('/server/news/create') }}" class="button is-primary">Create News</a>
			</div>
		</div>
	</div>
@endsection