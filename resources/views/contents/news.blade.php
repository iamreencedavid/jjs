<div class="card-block" id="What">
	<div class="row">         
		<h3>What's New?</h3>      
		<hr></hr> 

		@foreach($news as $item)
			<div class="col-md-12">
				<img class="img-news" src="/storage/uploads/news/{{ $item['photo'] }}"  />
				<h3>{{ $item['title'] }}</h3>
				<p>{{ $item['caption'] }}</p>
				<p class="text-right"><a href="#" data-id="{{ $item['id'] }}" class="btn btn-primary btn-sm btn-open-news-info">More Info</a></p>
			</div>  
		@endforeach       
	</div>
</div>