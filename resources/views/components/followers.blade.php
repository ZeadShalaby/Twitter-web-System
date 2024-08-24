<!-- Twitter Account -->

@foreach ($follow as $item)
    <div
        class="text-blue-400 text-sm font-normal p-3 border-b border-gray-200 dark:border-dim-200 hover:bg-gray-100 dark:hover:bg-dim-300 cursor-pointer transition duration-350 ease-in-out">
        <div class="flex flex-row justify-between p-2">
            <div class="flex flex-row">

                <img class="w-10 h-10 rounded-full" src="{{ asset($item->userfollowers->media_one->media) }}"
                    alt="profile-follow" />

                <div class="flex flex-col ml-2">
                    <h1 class="text-gray-900 dark:text-white font-bold text-sm">

                        {{ $item->userfollowers->name }}

                    </h1>
                    <p class="text-gray-400 text-sm">@

                        {{ $item->userfollowers->username }}


                    </p>
                </div>
            </div>
            <div class="">
                <div class="flex items-center h-full text-gray-800 dark:text-white">
                    <form action="{{ route('follow.store', ['userId' => $item->id]) }}" method="POST">
                        {{ csrf_field() }}
                        <button class="text-xs font-bold text-blue-400 px-4 py-1 rounded-full border-2 border-blue-400">
                            Follow
                        </button>
                    </form>
                    <form action="{{ route('follow.destroy', $item->id, ['followers_id' => $item->id]) }}"
                        method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="text-xs font-bold text-blue-400 px-4 py-1 rounded-full border-2 border-blue-400">
                            delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach

<!-- /Twitter Account -->

<!-- Loader -->
<div class="border-b border-gray-200 dark:border-dim-200 p-4 max-w-sm w-full mx-auto">
    <div class="animate-pulse flex space-x-4">
        <div class="rounded-full bg-gray-400 h-12 w-12"></div>
        <div class="flex-1 space-y-4 py-1">
            <div class="h-4 bg-gray-400 rounded w-3/4"></div>
            <div class="space-y-2">
                <div class="h-4 bg-gray-400 rounded"></div>
                <div class="h-4 bg-gray-400 rounded w-5/6"></div>
            </div>
        </div>
    </div>
</div>
<!-- /Loader -->

<div
    class="text-blue-400 text-sm font-normal p-3 hover:bg-gray-100 dark:hover:bg-dim-300 cursor-pointer transition duration-350 ease-in-out">
    <a href="{{ route('follow.index') }}">
        Show more
    </a>
</div>
<!-- /Who to follow -->
