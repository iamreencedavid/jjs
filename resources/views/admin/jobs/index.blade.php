@extends('admin')


@section('content')
	<div class="columns">
		<div class="column is-three-quarters">
			<div class="block">
			  <a href="{{ URL::to('/server/jobs/create') }}" class="button is-primary">Create New Job</a>
			</div>
		</div>
	</div>

	<h1>List of Jobs</h1>
	<table class="table">
			<thead>
				<tr>
					<th><abbr title="Position">Position</abbr></th>
					<th><abbr title="Closed Date">Closed Date</abbr></th>
					<th><abbr title="Status">Status</abbr></th>
					<th><abbr>&nbsp;</abbr></th>
				</tr>
			</thead>
			<tbody>
				@forelse($jobs as $job)
					<tr id="box-{{$job['id']}}">
						<td>{{ $job['position'] }}</td>
						<td>{{ \Carbon\Carbon::parse($job['closed_date'])->format('F d, Y') }}</td>
						<td>{{ ($job['status'] == 1) ? 'Enabled' : 'Disabled' }}</td>
						<td>
							<a href='{{ URL::to("/server/jobs/edit/{$job['id']}") }}' class="button is-success">
							    <span class="icon is-small">
							      <i class="fa fa-edit"></i>
							    </span>
							    <span>Edit</span>
							  </a>
							<a data-id="{{ $job['id'] }}" rel="jobs" class="button is-danger is-outlined remove-item" data-message="Do you want to remove this job?">
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
					<th><abbr title="Position">Position</abbr></th>
					<th><abbr title="Closed Date">Closed Date</abbr></th>
					<th><abbr title="Status">Status</abbr></th>
					<th><abbr>&nbsp;</abbr></th>
				</tr>
			</tfoot>
	</table>
@endsection