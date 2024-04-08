<div class="bg-white rounded-xl shadow-md dark:bg-gray-800 p-4 flex flex-col flex-row items-center md:space-x-4 space-y-4 md:space-y-0">
    <img class="md:w-60 p-2 md:p-20" src="{{$post->getFirstMediaUrl()}}" alt="Thumbnail">
        <div class="text-xl font-medium text-black dark:text-white">
            {{$post->title}}
        </div>
        <p class="text-gray-500 dark:text-gray-300">
            {{$post->excerpt()}}
        </p>
</div>
