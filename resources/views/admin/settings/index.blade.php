@extends('admin')


@section('content')
	<div class="tabs">
	  <ul id="tabs-settings">
	    <li><a>Header</a></li>
	    <li><a>Body</a></li>
	    <li class="is-active" rel="footer"><a>Footer</a></li>
	    <li rel="social" rel="social"><a>Social Media</a></li>
	  </ul>
	</div>

	<section>
		<div id="tab-footer" class="tabs-content">
			@include('admin.settings._template.footer')
		</div>

		<div id="tab-social" class="tabs-content hidden">
			@include('admin.settings._template.social-media')
		</div>
	</section>
@endsection