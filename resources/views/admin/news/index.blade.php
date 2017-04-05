@extends('admin')


@section('content')
	<div class="columns">
		<div class="column is-three-quarters">
			<div class="block">
			  <a href="{{ URL::to('/server/news/create') }}" class="button is-primary">Create News</a>
			</div>
		</div>
	</div>

	<h1>List of News</h1>
	<table class="table">
			<thead>
				<tr>
					<th><abbr title="Title">Title</abbr></th>
					<th><abbr title="Date">Date</abbr></th>
					<th width="50%"><abbr title="Caption">Caption</abbr></th>
					<th><abbr title="Status">Status</abbr></th>
					<th><abbr>&nbsp;</abbr></th>
				</tr>
			</thead>
			<tbody>
				@forelse($news as $item)
					<tr id="box-{{$item['id']}}">
						<td>{{ $item['title'] }}</td>
						<td>{{ \Carbon\Carbon::parse($item['date'])->format('F d, Y') }}</td>
						<td>{{ $item['caption'] }}</td>
						<td>{{ ($item['status'] == 1) ? 'Enabled' : 'Disabled' }}</td>
						<td>
							<a href='{{ URL::to("/server/news/edit/{$item['id']}") }}' class="button is-success">
							    <span class="icon is-small">
							      <i class="fa fa-edit"></i>
							    </span>
							    <span>Edit</span>
							  </a>
							<a data-id="{{ $item['id'] }}" rel="news" class="button is-danger is-outlined remove-item" data-message="Do you want to remove this news?">
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
					<th><abbr title="Title">Title</abbr></th>
					<th><abbr title="Date">Date</abbr></th>
					<th><abbr title="Caption">Caption</abbr></th>
					<th><abbr title="Status">Status</abbr></th>
					<th><abbr>&nbsp;</abbr></th>
				</tr>
			</tfoot>
	</table>
@endsection