<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('inc.links')

</head>
<body>
    <div id="app">
        @include('inc.topbar')

        <main class="py-4">
            <div class="container">
                @include('inc.messages')
                @yield('content')
                <div class="text-center">
                <p>below from layouts.app</p>
                <p>
                {{ link_to('http://copywritingthehardway.com') }}
                </p>
                <p>
                    <img src="{{ URL::to('https://i.imgur.com/d9gZizU.jpg') }}" alt="good boi" width="500" height="500">
                </p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
