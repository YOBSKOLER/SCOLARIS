<x-app>
    <form action="/ideas" method="post">
        @csrf


    <div class="col-span-full">
        <label for="description" class="block text-sm/6 font-medium text-white">New Ideas</label>
        <div class="mt-2">
            <textarea id="description" name="description" rows="3" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"></textarea>
        </div>
        <p class="mt-3 text-sm/6 text-gray-400">Have an idea you want to save for later?</p>
    </div>
    <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
    </div>
    </form>

    <div>
        @if($ideas->count())
        <h1 class="font-bold">
            Your Ideas
        </h1>
        <div class="mt-6 flex flex-col mb-2">
            @foreach($ideas as $idea )
        <a href="/ideas/{{ $idea->id }}" class="text-sm">
                {{ $idea->description }}
        </a>
            @endforeach
        </div>
        @endif

    </div>

</x-app>
