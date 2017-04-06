<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrfToken" content="{{ csrf_token() }}">

    <title>JJS - Outsource HR Facility</title>

    <link type="text/css" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ mix('/css/remodal.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ mix('/css/vendor.css') }}" rel="stylesheet" type="text/css">
    <script>
      window.Laravel = <?php echo json_encode([
          'csrfToken' => csrf_token(),
      ]); ?>
    </script>


</head>

<body>

  <!---//Facebook button code-->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  @include('partials.header')


  <!-- Page Content -->
  <section style="margin-top:50px">
    <div class="container">
        @yield('content')
    </div>
  </section>
  <!-- /.container -->


  @include('partials.footer')
  @include('partials.modals.contents')
  @include('partials.modals.news')
  @include('partials.modals.jobs')

<!-- /.map -->        
<div id="map"></div>
<script>
  function initMap() {
    var uluru = {lat: 14.560565, lng: 121.020922};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 19,
      center: uluru
  });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
  });
}
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCt0fjTt1EwvRUX-TfrjG4amqG7ZWO_E4s&callback=initMap">
</script>   

<script src="{{ mix('/js/app.js') }}"></script>
<script src="{{ mix('/js/vendor.js') }}"></script>        
</body>


</html>
