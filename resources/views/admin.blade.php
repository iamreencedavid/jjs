<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrfToken" content="{{ csrf_token() }}">
    <title>JJS - {{ $title }}</title>

    <link type="text/css" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ mix('/css/admin.css') }}" rel="stylesheet" type="text/css">

    @stack('styles')

    @stack('externaljs')
</head>

<body>
	@include('admin.header')
	<section class="section">
      <div class="container">
          @yield('content')
      </div>
    </section>

  	<script src="{{ mix('/js/admin.js') }}"></script>
    @stack('scripts')
</body>


</html>
