@foreach($contents as $content)
<div class="col-md-4">
	<div class="card h-100">
		<div class="card-block">
			@if(strpos($content['title'], 'Human Resource') !== false)
			<img class="img-fluid rounded" src="images/hr.jpg" alt="">
			@elseif(strpos($content['title'], 'Janitorial') !== false)
			<img class="img-fluid rounded" src="images/janitorial.jpg" alt="">
			@elseif(strpos($content['title'], 'Recruitment') !== false)
			<img class="img-fluid rounded" src="images/recruitment.jpg" alt="">
			@endif
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