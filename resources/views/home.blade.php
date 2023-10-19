<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <meta name="description"
        content="Jabalee Sport Management is dependable team mates in the business of sports and entertainment.">
    <meta name="keywords" content="Jabalee Sport management, basketball, kigali, Rwanda,bal,nba,africa">
    <meta name="author" content="Jabalee Sport Management">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#111827">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <!-- Open Graph Meta Tags for Social Media Sharing -->
    <meta property="og:title" content="Home">
    <meta property="og:description"
        content="Jabalee Sport Management is dependable team mates in the business of sports and entertainment.">
    <meta property="og:image" content="https://jabalee.africa/image.jpg">
    <meta property="og:url" content="https://jabalee.africa">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags for Twitter Sharing -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@JabaleeSports">
    <meta name="twitter:title" content="Home">
    <meta name="twitter:description"
        content="Jabalee Sport Management is dependable team mates in the business of sports and entertainment.">
    <meta name="twitter:image" content="https://jabalee.africa/image.jpg">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-900">
    <livewire:menu />
    <main>
        <!-- Hero section -->
        <div class="relative isolate overflow-hidden">
            <svg class="absolute inset-0 -z-10 h-full w-full stroke-rose-600/100 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
                aria-hidden="true">
                <defs>
                    <pattern id="983e3e4c-de6d-4c3f-8d64-b9761d1534cc" width="200" height="200" x="50%" y="-1"
                        patternUnits="userSpaceOnUse">
                        <path d="M.5 200V.5H200" fill="none" />
                    </pattern>
                </defs>
                <svg x="50%" y="-1" class="overflow-visible fill-rose-600/20">
                    <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
                        stroke-width="0" />
                </svg>
                <rect width="100%" height="100%" stroke-width="0" fill="url(#983e3e4c-de6d-4c3f-8d64-b9761d1534cc)" />
            </svg>
            <div class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)]"
                aria-hidden="true">
                <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#fecdd3] to-[#be123c] opacity-20"
                    style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
                </div>
            </div>
            <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-40 lg:flex lg:px-8 lg:pt-40">
                <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">
                    <img class="h-11" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                        alt="Your Company">
                    <div class="mt-24 sm:mt-32 lg:mt-16">
                        <a href="https://bounce.africa" target="_blank" class="inline-flex space-x-6">
                            <span
                                class="rounded-full bg-rose-600/100 px-3 py-1 text-sm font-semibold leading-6 text-white ring-1 ring-inset ring-rose-500/20">
                                Bounce Africa</span>
                            <span
                                class="inline-flex items-center space-x-2 text-sm font-medium leading-6 text-gray-300">
                                <span>Just Launched</span>
                                <svg class="h-5 w-5 text-gray-100" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                    </div>
                    <h1 class="mt-10 text-4xl font-bold tracking-tight text-white sm:text-6xl">Jabalee Sport Management
                    </h1>
                    <p class="mt-6 text-lg leading-8 text-gray-300">JABALEE Sports Management has a vision to be the
                        leading sports and Entertainment Company while connecting Africa to the global sports market.
                        Talent management is a major goal for us at JABALEE SM. We are currently identifying, nurturing,
                        grooming and growing our talents the right way at the CRUSADERS BASKETBALL ACADEMY and Launch
                        Bounce Platform where everyone can participate competition anywhere at anytime.</p>
                    <div class="mt-10 flex items-center gap-x-6">
                        <a href="#"
                            class="rounded-md bg-rose-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-rose-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-rose-400">Get
                            started</a>
                        <a href="{{ route('about') }}" class="text-sm font-semibold leading-6 text-white">About us <span
                                aria-hidden="true">→</span></a>
                    </div>
                </div>
                <div
                    class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
                    <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
                        <img src="https://images.pexels.com/photos/2277978/pexels-photo-2277978.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="App screenshot" width="2432" height="1442"
                            class="w-[76rem] rounded-md bg-rose-600/20 shadow-2xl ring-1 ring-rose-600/100">
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo cloud -->
        <div class="mx-auto mt-8 max-w-7xl px-6 sm:mt-16 lg:px-8">
            <h2 class="text-center text-lg font-semibold leading-8 text-white">Our most valued Partner</h2>
            <div
                class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="https://tailwindui.com/img/logos/158x48/transistor-logo-white.svg" alt="Transistor" width="158"
                    height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="https://tailwindui.com/img/logos/158x48/reform-logo-white.svg" alt="Reform" width="158"
                    height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="https://tailwindui.com/img/logos/158x48/tuple-logo-white.svg" alt="Tuple" width="158"
                    height="48">
                <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1"
                    src="https://tailwindui.com/img/logos/158x48/savvycal-logo-white.svg" alt="SavvyCal" width="158"
                    height="48">
                <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1"
                    src="https://tailwindui.com/img/logos/158x48/statamic-logo-white.svg" alt="Statamic" width="158"
                    height="48">
            </div>
        </div>

        <!-- Feature section -->
        <div class="mx-auto mt-16 max-w-7xl px-6 sm:mt-56 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-base font-semibold leading-7 text-rose-600">Who we are</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">About Jabalee</p>
                <p class="mt-6 text-lg leading-8 text-gray-300">JABALEE Sports Management has a vision to be the leading
                    sports and Entertainment Company while connecting Africa to the global sports market. Talent
                    management is a major goal for us at JABALEE SM. We are currently identifying, nurturing, grooming
                    and growing our talents the right way at the CRUSADERS BASKETBALL ACADEMY.</p>
            </div>

        </div>

        <!-- Feature section -->
        <div class="mt-16 sm:mt-56">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl sm:text-center">
                    <h2 class="text-base font-semibold leading-7 text-rose-600">Don't miss out! </h2>
                    <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Events.</p>
                    <p class="mt-6 text-lg leading-8 text-gray-300">Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis.</p>
                </div>
            </div>

            <div class="mx-auto mt-16 max-w-7xl px-6 sm:mt-20 md:mt-24 lg:px-8">

            </div>
        </div>



        <!-- CTA section -->
        <div class="relative isolate mt-16 px-6 py-32 sm:mt-56 sm:py-40 lg:px-8">
            <svg class="absolute inset-0 -z-10 h-full w-full stroke-rose-600/100 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
                aria-hidden="true">
                <defs>
                    <pattern id="1d4240dd-898f-445f-932d-e2872fd12de3" width="200" height="200" x="50%" y="0"
                        patternUnits="userSpaceOnUse">
                        <path d="M.5 200V.5H200" fill="none" />
                    </pattern>
                </defs>
                <svg x="50%" y="0" class="overflow-visible fill-rose-600/20">
                    <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
                        stroke-width="0" />
                </svg>
                <rect width="100%" height="100%" stroke-width="0" fill="url(#1d4240dd-898f-445f-932d-e2872fd12de3)" />
            </svg>
            <div class="absolute inset-x-0 top-10 -z-10 flex transform-gpu justify-center overflow-hidden blur-3xl"
                aria-hidden="true">
                <div class="aspect-[1108/632] w-[69.25rem] flex-none bg-gradient-to-r  from-[#fecdd3] to-[#be123c] opacity-20"
                    style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
                </div>
            </div>
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Register a player at Crusaders
                    Academy.</h2>
                <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-300">We are shaping career in basket ball.
                </p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="https://crusaders.africa/register-player" target="_blank"
                        class="rounded-md bg-rose-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Rgister
                        player here</a>
                    <a href="https://crusaders.africa/about" target="_blank"
                        class="text-sm font-semibold leading-6 text-white">Learn more <span
                            aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
    </main>
    <livewire:footer-component />
</body>

</html>