<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Billetterie ANESRIF</title>
        <link rel="icon" href="images/logo.ico" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
       
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bodyhome">
        <img src="images/bg2.jpg" alt="" class=" img1">
                    <header class="entete" >
                        
                        @if (Route::has('login'))
                            
                            <nav class="Navhome">
                                @auth
                                <div class="BTNHOME">
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="btnavhome"
                                    >
                                        Dashboard
                                    </a>
                                </div>        
                                @else
                                <div class="BTNHOME">
                                    <a
                                        href="{{ route('login') }}"
                                        class="btnavhome"
                                    >
                                        Log in
                                    </a>
                                </div>  
                                    @if (Route::has('register'))
                                <div class="BTNHOME">
                                        <a
                                            href="{{ route('register') }}"
                                            class="btnavhome"
                                        >
                                            Register
                                        </a>
                                </div>      
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>

                
    </body>
</html>
