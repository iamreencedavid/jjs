@extends('admin')

@section('content')
<div class="columns">
	<div class="column is-three-quarters">
		<div class="block">
			<a href="{{ URL::to('/server/users') }}" class="button is-primary">Back to List</a>
			<a href="{{ URL::to('/server/users/create') }}" class="button is-primary">Create User</a>
		</div>
	</div>
</div>

<form id="form_users_update">
	<div class="columns">
		<div class="column is-half">
			<div class="field">
				<label class="label">Fullname</label>
				<p class="control">
					<input name="name" class="input" id="name" type="text" value="{{ $user->name }}" required>
				</p>
			</div>
		</div>
	</div>

	<div class="columns">
		<div class="column is-half">
			<div class="field">
				<label class="label">Email Address</label>
				<p class="control">
					<input name="email" class="input" id="email" type="email" value="{{ $user->email }}" required>
				</p>
			</div>
		</div>
	</div>

	<div class="columns">
		<div class="column is-half">
			<div class="field">
				<label class="label">Password</label>
				<p class="control">
					<input name="password" class="input" id="password" type="password">
				</p>
			</div>
		</div>
	</div>

	<div class="field">
		<label class="label">Status</label>
		<p class="control">
			<label class="radio">
				<input type="radio" checked value="1" name="status">
				Enable
			</label>
			<label class="radio">
				<input type="radio" value="0" name="status">
				Disable
			</label>
		</p>
	</div>

	<div class="field is-grouped">
		<p class="control">
			<input type="hidden" id="_id" value="{{ $user->id }}">
			<button type="submit" class="button is-primary">Update User</button>
		</p>
	</div>
</form>
		
@endsection

@push('scripts')
	
@endpush