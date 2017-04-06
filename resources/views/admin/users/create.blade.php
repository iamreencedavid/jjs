@extends('admin')

@section('content')
<div class="columns">
	<div class="column is-three-quarters">
		<div class="block">
			<a href="{{ URL::to('/server/news') }}" class="button is-primary">Back to List</a>
		</div>
	</div>
</div>

<form id="form_users_create">
	<div class="columns">
		<div class="column is-half">
			<div class="field">
				<label class="label">Fullname</label>
				<p class="control">
					<input name="name" class="input" id="name" type="text" required>
				</p>
			</div>
		</div>
	</div>

	<div class="columns">
		<div class="column is-half">
			<div class="field">
				<label class="label">Email Address</label>
				<p class="control">
					<input name="email" class="input" id="email" type="email" required>
				</p>
			</div>
		</div>
	</div>

	<div class="columns">
		<div class="column is-half">
			<div class="field">
				<label class="label">Password</label>
				<p class="control">
					<input name="password" class="input" id="password" type="password" required>
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
			<button type="submit" class="button is-primary">Save User</button>
		</p>
		<p class="control">
			<button type="button" class="button is-link">Cancel</button>
		</p>
	</div>
</form>
		
@endsection

@push('scripts')
	
@endpush