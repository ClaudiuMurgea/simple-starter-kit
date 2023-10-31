<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EGT</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap/bootstrap.min.css')         }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css')                      }}">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
<!-- Scripts -->
    </head>
    <body style="position:relative;background:rgba(175,175,175,0.3);" class="relative antialiased custom_scrollbar w-100">
        <div style="position:sticky; top:0;z-index:1;color:purple; min-height:200px;background:linear-gradient(-45deg,#ea472d 0%,#f18472 100%);">
            @livewire('header')
        </div>
        <div style="position:relative;" class="d-flex">
            @livewire('sidebar')
            <div class="w-100" style="margin-top:-135px;z-index:3;">
                @if(isset($slot))
                   <div>
                        {{ $slot }}
                   </div> 
                @endif
            </div>
        </div>
    </body>
</html>
