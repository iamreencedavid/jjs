@extends('admin')


@section('content')
	<div class="columns">
		<div class="column is-three-quarters">
			<div class="block">
			  <a href="{{ URL::to('/server/applicants') }}" class="button is-primary">Back to Applicant List</a>
			</div>
		</div>
	</div>

	<h1>List of Archived Applicants</h1>
	<table class="table">
			<thead>
				<tr>
					<th><abbr title="Name">Name</abbr></th>
					<th><abbr title="Email">Email</abbr></th>
					<th><abbr title="Contact No.">Contact No.</abbr></th>
					<th><abbr title="Date Applied">Date Applied</abbr></th>
					<th><abbr title="Resume">Resume</abbr></th>
					<th><abbr>&nbsp;</abbr></th>
				</tr>
			</thead>
			<tbody>
				@forelse($applicants as $applicant)
					<tr id="box-{{$applicant['id']}}">
						<td>{{ $applicant['fullname'] }}</td>
						<td>{{ $applicant['email_address'] }}</td>
						<td>{{ $applicant['contact_number'] }}</td>
						<td>{{ \Carbon\Carbon::parse($applicant['created_at'])->format('F d, Y') }}</td>
						<td><a href="/storage/uploads/resume/{{ $applicant['resume'] }}" target="_blank">{{ $applicant['resume'] }}</a></td>
						<td>
							<a data-id="{{ $applicant['id'] }}" rel="applicants" class="button is-danger is-outlined remove-item" data-message="Do you want to delete this applicant?">
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
					<th><abbr title="Name">Name</abbr></th>
					<th><abbr title="Email">Email</abbr></th>
					<th><abbr title="Contact No.">Contact No.</abbr></th>
					<th><abbr title="Date Applied">Date Applied</abbr></th>
					<th><abbr title="Resume">Resume</abbr></th>
					<th><abbr>&nbsp;</abbr></th>
				</tr>
			</tfoot>
	</table>
@endsection