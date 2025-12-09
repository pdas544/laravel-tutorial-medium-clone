<div class="flex flex-row bg-neutral-primary-soft w-full border border-default rounded-base shadow-xs mt-4 bg-white">

    <img class="rounded-base w-48 h-full object-cover rounded-md" src="/image.jpg" alt="" />

    <div class="flex flex-col ml-4 mb-4">
        <a href="#">
            <h5 class="mt-6 mb-2 text-2xl font-semibold tracking-tight text-heading">{{$post->title}}</h5>
        </a>
        <p class="mb-6 text-body">{{ Str::words($post->content,20)}}</p>

        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-600 dark:focus:ring-blue-800 w-32">
            Read more
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>
