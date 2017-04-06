@extends('error')

@section('content')
  <div class="row">
    <div class="span12">
      <div class="hero-unit center" style="margin-top:100px">
        <h1>Page Not Found <small><font face="Tahoma" color="red">Error 404</font></small></h1>
        <br />
        <p>The page you requested could not be found, either contact your webmaster or try again. Use your browsers <b>Back</b> button to navigate to the page you have prevously come from</p>
        <p><b>Or you could just press this neat little button:</b></p>
        <a href="{{ URL::to('/') }}" class="btn btn-large btn-info"><i class="icon-home icon-white"></i> Take Me the Site</a>
      </div>
      <br />
      <p></p>
      <!-- By ConnerT HTML & CSS Enthusiast -->  
    </div>
  </div>
@endsection