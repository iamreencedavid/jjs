@extends('admin')


@section('content')
	<div class="columns">
		<div class="column is-three-quarters">
			<div class="block">
			  <a href="{{ URL::to('/server/contents/create') }}" class="button is-primary">Create New Content</a>
			</div>
		</div>
	</div>

	<h1>List of Contents</h1>
	<table class="table">
			<thead>
				<tr>
					<th><abbr title="Position">Title</abbr></th>
					<th style="width:50%"><abbr title="Closed Date">Caption</abbr></th>
					<th><abbr title="Status">Status</abbr></th>
					<th><abbr>&nbsp;</abbr></th>
				</tr>
			</thead>
			<tbody>
				@forelse($contents as $content)
					<tr id="box-{{$content['id']}}">
						<td>{{ $content['title'] }}</td>
						<td>{{ $content['caption'] }}</td>
						<td>{{ ($content['status'] == 1) ? 'Enabled' : 'Disabled' }}</td>
						<td>
							<a href='{{ URL::to("/server/contents/edit/{$content['id']}") }}' class="button is-success">
							    <span class="icon is-small">
							      <i class="fa fa-edit"></i>
							    </span>
							    <span>Edit</span>
							  </a>
							<a data-id="{{ $content['id'] }}" rel="contents" class="button is-danger is-outlined remove-item" data-message="Do you want to remove this content?">
							    <span>Delete</span>
							    <span class="icon is-small">
							      <i class="fa fa-times"></i>
							    </span>
							  </a>
						</td>
					</tr>
				@empty

				@endforelse
			</tbody>
			<tfoot>
				<tr>
					<th><abbr title="Position">Title</abbr></th>
					<th><abbr title="Closed Date">Caption</abbr></th>
					<th><abbr title="Status">Status</abbr></th>
					<th><abbr>&nbsp;</abbr></th>
				</tr>
			</tfoot>
	</table>
@endsection