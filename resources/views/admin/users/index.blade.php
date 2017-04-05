@extends('admin')


@section('content')
	<div class="columns">
		<div class="column is-three-quarters">
			<div class="block">
			  <a href="{{ URL::to('/server/users/create') }}" class="button is-primary">Create User</a>
			  <a href="{{ URL::to('/server/users/in-active') }}" class="button is-danger">In-Active User</a>
			</div>
		</div>
	</div>

	<h1>List of System Users</h1>
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
							<a href='{{ URL::to("/server/users/edit/{$user['id']}") }}' class="button is-success">
							    <span class="icon is-small">
							      <i class="fa fa-edit"></i>
							    </span>
							    <span>Edit</span>
							  </a>
							<a data-id="{{ $user['id'] }}" rel="users" data-status="0" class="button is-danger is-outlined status-item" data-message="Do you want to disabled this user?">
							    <span>Disable</span>
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