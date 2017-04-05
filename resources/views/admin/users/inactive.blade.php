@extends('admin')


@section('content')
	<div class="columns">
		<div class="column is-three-quarters">
			<div class="block">
			<a href="{{ URL::to('/server/users') }}" class="button is-primary">Back to User List</a>
			  <a href="{{ URL::to('/server/users/create') }}" class="button is-primary">Create User</a>
			</div>
		</div>
	</div>

	<h1>List of In-Active Users</h1>
	<table class="table">
			<thead>
				<tr>
					<th><abbr title="Name">Name</abbr></th>
					<th><abbr title="Email">Email</abbr></th>
					<th><abbr title="Account Created">Account Created</abbr></th>
					<th><abbr title="LastLogin">Last Login</abbr></th>
					<th><abbr title="Status">Status</abbr></th>
					<th><abbr>&nbsp;</abbr></th>
				</tr>
			</thead>
			<tbody>
				@forelse($users as $user)
					<tr id="box-{{$user['id']}}">
						<td>{{ $user['name'] }}</td>
						<td>{{ $user['email'] }}</td>
						<td>{{ \Carbon\Carbon::parse($user['created_at'])->format('F d, Y') }}</td>
						<td>{{ \Carbon\Carbon::parse($user['updated_at'])->format('F d, Y h:i:s A') }}</td>
						<td>{{ ($user['status'] == 1) ? 'Active' : 'In-Active' }}</td>
						<td>
							<a data-id="{{ $user['id'] }}" rel="users" data-status="1" class="button is-danger is-outlined status-item" data-message="Do you want to restore this user?">
							    <span>Restore</span>
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
					<th><abbr title="Account Created">Account Created</abbr></th>
					<th><abbr title="LastLogin">Last Login</abbr></th>
					<th><abbr title="Status">Status</abbr></th>
					<th><abbr>&nbsp;</abbr></th>
				</tr>
			</tfoot>
	</table>
@endsection