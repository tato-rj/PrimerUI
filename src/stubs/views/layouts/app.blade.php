<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$title ?? 'Welcome'}} | {{config('app.name')}}</title>

        @include('layouts.components.favicon')
        @include('layouts.components.seo')

        <link href="{{ asset('vendor/prism/prism.css') }}" rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        @stack('header')
    </head>
    <body>
        <div id="window-overlay" class="window-overlay"></div>
        
        @include('layouts.header')

        <div id="page-content">
            <div class="pt-3 pb-5">
                @yield('content')
            </div>
        </div>

        @include('layouts.components.alerts')

        <script src="{{ mix('js/app.js') }}"></script>
        <script src="{{ asset('vendor/prism/prism.js') }}"></script>
        
        <script type="text/javascript">
            (new Overlay({
                element: '#window-overlay',
                speed: 'fast'
            })).run();
            
            (new Clipboard({
                element: '[data-clipboard-text], [data-clipboard-target]',
                success: 'Copied!',
                error: 'Failed...'
            })).run();
        </script>
        @stack('scripts')
    </body>
</html>
