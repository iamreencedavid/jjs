@extends('admin')


@push('styles')
	<link rel="stylesheet" type="text/css" href="/libraries/pikaday/pikaday.css">
@endpush

@section('content')
<form id="form_jobs_create">
	<div class="columns">
		<div class="column is-three-quarters">
			<div class="block">
				<a href="{{ URL::to('/server/jobs') }}" class="button is-primary">Back to List</a>
			</div>
		</div>
	</div>

	<div class="columns">
		<div class="column is-three-quarters">
			<div class="field">
				<label class="label">Position</label>
				<p class="control">
					<input class="input" type="text" name="position">
				</p>
			</div>
		</div>
	</div>

	<div class="columns">
		<div class="column is-one-quarter">
			<div class="field">
				<label class="label">Date</label>
				<p class="control">
					<input class="input" id="datepicker" type="text" name="closed_date">
				</p>
			</div>
		</div>
	</div>

	<div class="columns">
		<div class="column is-three-quarters">
			<div class="field">
				<label class="label">Description</label>
				<p class="control">
					<textarea name="description" id="description"></textarea>
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
			<button class="button is-primary">Submit</button>
		</p>
		<p class="control">
			<button class="button is-link">Cancel</button>
		</p>
	</div>
</form>

@endsection

@push('scripts')
	<script type="text/javascript" src="/libraries/tinymce/js/tinymce/tinymce.min.js"></script>
	<script>
		tinymce.init({
		  selector: '#description',
		  height: 400,
		  menubar: false,
		  plugins: [
		    'advlist autolink lists link image charmap print preview anchor',
		    'searchreplace visualblocks code fullscreen',
		    'insertdatetime media table contextmenu paste code'
		  ],
		  toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		  content_css: '//www.tinymce.com/css/codepen.min.css'
		});
	</script>

	<script type="text/javascript" src="/libraries/pikaday/pikaday.js"></script>

	<script>
		var picker = new Pikaday({ 
			field: $('#datepicker')[0],
			format: 'YYYY-MM-DD',
		});
	</script>
@endpush