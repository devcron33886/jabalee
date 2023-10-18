<div class="mx-auto mt-12 max-w-7xl px-6 sm:mt-40 lg:px-8" id="events">
    <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Events</h2>
        <p class="mt-6 text-lg leading-8 text-gray-300">You can now rewind in our events or participate in the
            upcoming ones.</p>
    </div>
    <ul role="list"
        class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-14 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-3">
        @foreach ($events as $event)

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="{{ $event->url}}">
                <img class="rounded-t-lg" src="{{ asset('storage/'.$event->image)}}" alt="" />
            </a>
            <div class="p-5">
                <a href="{{ $event->url}}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$event->name}}
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Price: ${{ $event->price}}</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Start Date: {{ $event->start_at}}</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">End date: {{ $event->end_at}}</p>
                <a href="{{ $event->url}}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-rose-600 rounded-lg hover:bg-rose-700 focus:ring-4 focus:outline-none focus:ring-rose-300 dark:bg-rose-600 dark:hover:bg-rose-700 dark:focus:ring-rose-800">
                    Read more
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>

        @endforeach


        <!-- More people... -->
    </ul>
    <div class="mx-auto mt-12 max-w-2xl text-center">
        {{ $events->links()}}
    </div>
</div>