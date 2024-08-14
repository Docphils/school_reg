<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome - Meph Academy</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        <div class="bg-cyan-900 text-white dark:bg-black dark:text-white/50">
            <div class="relative min-h-screen flex justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full">
                    <header class="bg-cyan-950 grid grid-cols-2 items-center gap-2 lg:grid-cols-3 py-2 px-10 shadow-lg shadow-sky-700">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <img src="images/ma.png" class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20] rounded-full" />
                        </div>
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                    </header>

                    <main class="">
                        <!--Hero Section-->
                        <div class="bg-cover bg-center h-screen relative" style="background-image:url(images/banner.jpg);">
                            <div class="absolute inset-0 bg-gray-950 bg-opacity-80 hover:bg-opacity-90"></div> <!-- Overlay -->
                            <div class="container mx-auto h-full flex items-center justify-center relative">
                                <div class="text-center text-white p-8 rounded-lg">
                                    <h1 class="text-5xl font-bold hover:animate-bounce">Welcome to Meph Academy</h1>
                                    <p class="mt-4 text-xl px-10">Trust us with the allround growth and development of you child. We groom and nurture world champions in the most conducive learning atmosphere</p>
                                    <a href="#form" class="mt-8 inline-block bg-cyan-900 hover:underline text-lg text-white py-3 px-6 font-bold rounded-lg hover:bg-cyan-600 transition duration-300">Register Now</a>
                                </div>
                            </div>
                        </div>
                        <!--Registration Section-->
                        <div class="relative p-9 mt-6 grid gap-6 lg:grid-cols-2 lg:gap-8">
                            <div class="grid mb-6">
                                <div class="items-center w-full">
                                    <div class="mx-auto flex items-start border-2 h-64 bg-white w-2/3 rounded-full">
                                        <img src="images/teacher.png" class="object-cover w-full border-b" alt="">
                                    </div>
                                </div>
                                <div class="text-center">Get your child enrolled with us today for unforgettable experiences.</div>
                            </div>
                            <div id="form"  class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800">
                                @livewire('welcome.register-form')
                            </div>
                        </div>
                    </main>

                    <footer class="py-16 text-center text-sm text-white dark:text-white/70">
                        Meph Academy v1.0
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
