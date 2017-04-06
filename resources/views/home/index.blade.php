@extends('master')

@section('content')
<div class="row">
	<p>&nbsp;</p>
</div>  

<!-- Heading Row -->
<div class="row" id="Home">
	<div class="col-lg-8">
		<img class="img-fluid rounded" src="images/banner 900x400.png" alt="">
	</div>
	<!-- /.col-lg-8 -->
	<div class="col-lg-4">
		<h1>JJS ACTS OF SERVICE FACILITIES INC</h1>
		<p>In a nutshell, we are a local manpower service. But this has taken a bit of an antiquated tone. We prefer the term "Outsource HR Facility."</p>
		<a class="btn btn-primary btn-lg scrollto"  href="#Contact">Call to Action!</a>
	</div>
	<!-- /.col-md-4 -->
</div>
<!-- /.row -->

<!-- Call to Action Well -->
<div class="card card-inverse card-primary my-4 text-center" id="About"> 
	<div class="card-block">
		<p class="text-white m-0">We are businesspeople who cater to other businesspeople. This makes it easy for us to put ourselves in your shoes. </p>
	</div>
</div>

<!-- Content Row -->
<div class="row">
	@include('contents.contents', ['contents' => $contents])
</div>
<!-- /.row -->

<!-- /.News Panel -->
@include('contents.news', ['news' => $news])
<!-- End News Panel -->

<div class="row" id="Careers">              
	@include('contents.jobs', ['jobs' => $jobs])
</div>


<!-- /.Sign Up Form -->
<div class="row" id="Application">
	@include('contents.contacts')  
</div>

</div> 
@endsection