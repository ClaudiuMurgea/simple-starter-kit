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
    </head>
    <body style="position:relative;background:rgba(175,175,175,0.3);" class="relative antialiased custom_scrollbar w-100">
        <div style="position:sticky; top:0;z-index:1;color:purple; min-height:200px;background:linear-gradient(-45deg,#ea472d 0%,#f18472 100%);">
            @livewire('header')
        </div>
        <div class="d-flex">
            @livewire('sidebar')
            <div class="w-100">
                @if(isset($slot))
                    {{ $slot }}
                @endif
                <div style="position:absolute;top:23px;z-index:5555;color:#fff;left:330px;" class="fw-bold">
                    Dashboard
                </div>
                <div style="width:200px;margin-top:50px;margin-left:50px;">
                    @if($errors->any())
                        <div>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="GET">
                        @method('POST')
                        <div class="mb-5">
                            <label for="email" class="block">
                                Email:
                            </label>
                            <input type="text" id="email" name="email" class="border border-gray-300 p-1">
                        </div>
                        <div class="mb-5">
                            <label for="password" class="block">
                                Password:
                            </label>
                            <input type="password" name="password" id="password" class="border border-gray-300 p-1">
                        </div>
                        <button class="rounded bg-blue-800 text-white px-4 py-2">
                            Log in
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>