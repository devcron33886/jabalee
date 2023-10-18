<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-900">
    <livewire:menu />
    <main class="relative isolate">
        <!-- Background -->
        <div class="absolute inset-x-0 top-4 -z-10 flex transform-gpu justify-center overflow-hidden blur-3xl"
            aria-hidden="true">
            <div class="aspect-[1108/632] w-[69.25rem] flex-none bg-gradient-to-r from-[#fecdd3] to-[#be123c] opacity-25"
                style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
            </div>
        </div>

        <!-- Header section -->
        <div class="px-6 pt-14 lg:px-8">
            <div class="mx-auto max-w-2xl pt-24 text-center sm:pt-40">
                <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">We love to see happy people
                    enjoying the game.</h2>
                <p class="mt-6 text-lg leading-8 text-gray-300">Welcome to Jabalee Sport Management where sport is our
                    love language.</p>
            </div>
        </div>

        <!-- Team section -->
        <livewire:event-component />


    </main>
    <livewire:footer-component />
</body>

</html>