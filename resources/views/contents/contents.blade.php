@foreach($contents as $content)
<div class="col-md-4">
	<div class="card h-100">
		<div class="card-block">
			<img class="img-fluid rounded" src="/storage/uploads/contents/{{ $content['photo'] }}" alt="">
			<h2 class="card-title">{{ $content['title'] }}</h2>
			<p class="card-text">
				{{ $content['caption'] }}
			</p>
		</div>
		<div class="card-footer">
		<a href="#" class="btn btn-primary btn-view-contents" data-id="{{ $content['id'] }}">More Info</a>
		</div>
	</div>
</div>
@endforeach