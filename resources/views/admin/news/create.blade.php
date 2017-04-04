@extends('admin')


@push('styles')
	<link rel="stylesheet" type="text/css" href="/libraries/pikaday/pikaday.css">
@endpush

@section('content')
<div class="columns">
	<div class="column is-three-quarters">
		<div class="block">
			<a href="{{ URL::to('/server/news') }}" class="button is-primary">Back to List</a>
		</div>
	</div>
</div>

<form id="form_news_create" enctype="multipart/form-data">
	<div class="columns">
		<div class="column is-three-quarters">
			<div class="field">
				<label class="label">Title</label>
				<p class="control">
					<input name="title" class="input" id="title" type="text" placeholder="News Title">
				</p>
			</div>
		</div>
	</div>

	<div class="columns">
		<div class="column is-one-quarter">
			<div class="field">
				<label class="label">Date</label>
				<p class="control">
					<input name="date" class="input" id="datepicker" type="text">
				</p>
			</div>
		</div>
	</div>

	<div class="columns">
		<div class="column is-three-quarters">
			<div class="field">
				<label class="label">Caption</label>
				<p class="control">
					<textarea name="caption" class="textarea"></textarea>
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
		<label class="label">Upload image photo</label>
		<p class="control">
			<input type="file">
		</p>
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
			<button type="submit" class="button is-primary">Submit</button>
		</p>
		<p class="control">
			<button type="button" class="button is-link">Cancel</button>
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
			format: 'MM-DD-YYYY',
		});
	</script>
@endpush