<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UTI Soluções</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-base flex items-center lg:justify-center min-h-screen flex-col font-sans">
        <header class="w-full text-sm not-has-[nav]:hidden">
            <nav class="navbar bg-base-100 shadow-sm md:px-12">
                <div class="navbar-start">
                  <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /> </svg>
                    </div>
                    <ul
                      tabindex="0"
                      class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                      <li><a href="#services" class="btn btn-soft text-primary">Serviços</a></li>
                      <li><a class="btn btn-ghost btn-primary">Ticket</a></li>
                    </ul>
                  </div>
                    <a class="text-xl flex items-center cursor-pointer">
                        <img class="w-10 h-auto" src="/logo.png" alt="Logo UTI Soluções">
                        <span class="text-primary text-xl md:text-2xl font-bold ml-2">UTI Soluções</span>
                    </a>
                </div>
                <div class="navbar-center hidden lg:flex">
                  <ul class="menu menu-horizontal px-1 gap-4">
                    <li><a href="#services" class="btn btn-soft text-primary">Serviços</a></li>
                    <li><a class="btn btn-ghost btn-primary">Ticket</a></li>
                  </ul>
                </div>
                <div class="navbar-end">
                    <a class="btn btn-ghost btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-in-icon lucide-log-in"><path d="m10 17 5-5-5-5"/><path d="M15 12H3"/><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/></svg>
                        <span>Login</span>
                    </a>
                </div>
              </nav>
        </header>
        <div class="flex w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex w-full flex-col">
                @include('page/hero')
                @include('page/about')
                @include('page/services')
                @include('page/clients')
                @include('page/why')
                @include('page/ready')
                @include('page/footer')
            </main>
        </div>

    </body>
</html>
