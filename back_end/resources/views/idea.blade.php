<x-app>
    <div>

        <h1 class="font-bold">
            Your Idea
        </h1>
        <div class="mt-5">

            {{ $ideas->description }}
        </div>

        <div class="mt-4">

            <a href="/ideas/{{ $ideas->id }}/edit"
                class=" rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Edit</a>
        </div>



    </div>

</x-app>
