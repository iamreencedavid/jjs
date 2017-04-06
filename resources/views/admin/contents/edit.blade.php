@extends('admin')

@section('content')
<form id="form_contents_update">
	<div class="columns">
		<div class="column is-three-quarters">
			<div class="block">
				<a href="{{ URL::to('/server/contents') }}" class="button is-primary">Back to List</a>
				<a href="{{ URL::to('/server/contents/create') }}" class="button is-primary">Create New Content</a>
			</div>
		</div>
	</div>

	<div class="columns">
		<div class="column is-three-quarters">
			<div class="field">
				<label class="label">Title</label>
				<p class="control">
					<input name="title" class="input" id="title" type="text" value="{{ $content->title }}">
				</p>
			</div>
		</div>
	</div>

	<div class="columns">
		<div class="column is-three-quarters">
			<div class="field">
				<label class="label">Caption</label>
				<p class="control">
					<textarea name="caption" class="textarea">{{ $content->caption }}</textarea>
				</p>
			</div>
		</div>
	</div>

	<div class="columns">
		<div class="column is-three-quarters">
			<div class="field">
				<label class="label">Description</label>
				<p class="control">
					<textarea name="description" id="description">{{ $content->description }}</textarea>
				</p>
			</div>
		</div>
	</div>

	<div class="field">
		<label class="label">Status</label>
		<p class="control">
			<label class="radio">
				<input type="radio" value="1" name="status" {{ ($content->status) ? 'checked' : '' }} >
				Enable
			</label>
			<label class="radio">
				<input type="radio" value="0" name="status" {{ (!$content->status) ? 'checked' : '' }}>
				Disable
			</label>
		</p>
	</div>

	<div class="field is-grouped">
		<p class="control">
			<input type="hidden" id="_id" value="{{ $content->id }}">
			<button class="button is-primary">Update</button>
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

@endpush