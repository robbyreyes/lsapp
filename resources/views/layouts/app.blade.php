<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    
    {{-- <script src="{{ asset('js/bootstrap.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">

    <script src="https://cdn.tiny.cloud/1/hmxfia6c5cgzp0bqsl1yj1ioco6emjvbny328dors4lq2n3r/tinymce/5/tinymce.min.js"></script>
    <script>
    tinymce.init({
      selector: 'textarea'
    });
    </script>
</head>
<body>
	@include('include.navbar')
    <div id="app">
        
        {{-- <main class="py-4"> --}}<div class="container">
        	@include('include.messages')
            @yield('content')
        {{-- </main> --}}</div>
    </div>
</body>
</html>
