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
  <section>
    <div class="container">
        @yield('content')
    </div>
  </section>
  <script src="{{ mix('/js/app.js') }}"></script>
  <script src="{{ mix('/js/vendor.js') }}"></script>        
</body>


</html>
