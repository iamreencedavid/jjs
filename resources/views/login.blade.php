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
	
    <section class="hero is-fullheight is-dark is-bold">

    <div class="hero-body">
      <div class="container">
        <div class="columns is-vcentered">
          <div class="column is-4 is-offset-4">
            <h1 class="title">
              Login
            </h1>
            <div class="box">
              <label class="label">Email</label>
              <p class="control">
                <input class="input" type="text" placeholder="jjs@example.org">
              </p>
              <label class="label">Password</label>
              <p class="control">
                <input class="input" type="password" placeholder="●●●●●●●">
              </p>
              <hr>
              <p class="control">
                <button class="button is-primary">Login</button>
                <a href="{{ URL::to('/') }}" class="button is-default" style="color:black">Cancel</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  	<script src="{{ mix('/js/admin.js') }}"></script>
    @stack('scripts')
</body>


</html>
