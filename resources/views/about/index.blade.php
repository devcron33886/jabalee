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
                <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">We love athletes</h2>
                <p class="mt-6 text-lg leading-8 text-gray-300">Welcome to Jabalee Sport Management where sport is our
                    language. Now you can play your game and get known with the whole world.</p>
            </div>
        </div>

        <!-- Content section -->
        <div class="mx-auto mt-20 max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
                <div class="max-w-xl gap-8 text-base leading-7 text-gray-300 lg:max-w-none ">
                    <div>
                        <p class="text-lg">JABALEE Sports Management has a vision to be the leading sports and
                            Entertainment Company
                            while connecting Africa to the global sports market. Talent management is a major goal for
                            us at JABALEE SM. We are currently identifying, nurturing, grooming and growing our talents
                            the right way at the CRUSADERS BASKETBALL ACADEMY. We have also inveted a platform called <a
                                href="https://bounce.africa" target="_blank"
                                class="underline-offset-8 italic text-2xl font-extrabold text-rose-600">Bounce</a> where
                            you can play your basket ball game and record it then you upload the video to the bounce
                            platform and get known with the whole world. We have also launced a <a
                                href="https://crusaders.africa" target="_blank"
                                class="underline-offset-8 italic text-2xl font-extrabold text-rose-600">Crusaders</a>
                            where we train children from the age of 5 to 15 years(Fundamental of Basket ball) and 16
                            years and above(Elite players).
                        </p>
                        <p class="mt-8 text-lg">We therefore agreed that starting up Sports academies is the way to go
                            and
                            having the best coaches involved with our athletes is vital to their success. We are
                            equipping our athletes between the ages 6 years to 16 years with the basic fundamentals of
                            the game, discipline, Team work, hard work, etiquette, professional mindset and being
                            respectful of all people around them. The goal is to ensure that our athletes are well
                            trained, groomed and develop the right way from an early age so as to have a successful path
                            to their future opportunities and ensuring they have the consistency to stay at the top of
                            their game no matter where they go.</p>
                    </div>

                </div>

            </div>

            <div class="grid grid-cols-1 gap-x-8 gap-y-2 sm:grid-cols-2 mt-12">
                <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none mt-4">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Our mission</h2>
                    <div class="mt-6 flex flex-col gap-x-8 gap-y-20 lg:flex-row">
                        <div class="lg:w-full lg:max-w-2xl lg:flex-auto">
                            <p class="text-xl leading-8 text-white">To be a leader in spotting, scouting,
                                identifying
                                young talents and developing them
                                into elite young athletes who will stand out and be dominant at any destination
                                they go.
                            </p>

                        </div>

                    </div>
                </div>
                <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none mt-4">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Our Vision</h2>
                    <div class="mt-6 flex flex-col gap-x-8 gap-y-20 lg:flex-row">
                        <div class="lg:w-full lg:max-w-2xl lg:flex-auto">
                            <p class="text-xl leading-8 text-white">To be the leading talent hub in Africa, with
                                well
                                groomed, nurtured and elite young
                                athletes playing consistently at highest level while exhibiting great discipline
                                and
                                professionalism.
                                Availing these athletes opportunities all over the world.
                            </p>

                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- Image section -->
        <div class="mt-32 sm:mt-40 xl:mx-auto xl:max-w-7xl xl:px-8">
            <img src="https://images.pexels.com/photos/264258/pexels-photo-264258.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                alt="" class="aspect-[9/4] w-full object-cover xl:rounded-3xl">
        </div>

        <!-- Team section -->
        <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-40 lg:px-8" id="team">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Our team</h2>
                <p class="mt-6 text-lg leading-8 text-gray-300">We are a team of professional passionate about
                    shaping the careers of young people and what we do.</p>
            </div>
            <ul role="list"
                class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-14 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-4">
                <li>
                    <img class="aspect-[14/13] w-full rounded-2xl object-cover"
                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                        alt="">
                    <h3 class="mt-6 text-lg font-semibold leading-8 tracking-tight text-white">Mr Brian Kirungi</h3>
                    <p class="text-base leading-7 text-gray-300">Co-Founder / CEO</p>

                </li>
                <li>
                    <img class="aspect-[14/13] w-full rounded-2xl object-cover"
                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                        alt="">
                    <h3 class="mt-6 text-lg font-semibold leading-8 tracking-tight text-white">Mr CHRISTOPHER KYEBAMBE
                    </h3>
                    <p class="text-base leading-7 text-gray-300">Techical Director / Head Coach</p>

                </li>
                <li>
                    <img class="aspect-[14/13] w-full rounded-2xl object-cover"
                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                        alt="">
                    <h3 class="mt-6 text-lg font-semibold leading-8 tracking-tight text-white">Mr Joshua NGARAMBE</h3>
                    <p class="text-base leading-7 text-gray-300">CFO</p>

                </li>
                <li>
                    <img class="aspect-[14/13] w-full rounded-2xl object-cover"
                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                        alt="">
                    <h3 class="mt-6 text-lg font-semibold leading-8 tracking-tight text-white">Mr Jacques MBABAZI</h3>
                    <p class="text-base leading-7 text-gray-300">CTO</p>

                </li>


                <!-- More people... -->
            </ul>
        </div>


    </main>
    <livewire:footer-component />
</body>

</html>