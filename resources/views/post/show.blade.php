<x-app-layout>


    <div class="py-4">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                    <h1 class="text-4xl mb-4">{{ $post->title }}</h1>
                    <div class="flex gap-4">
                        @if ($post->user->image)
                            <img src="{{ $post->user->imageUrl() }}" alt="{{$post->user->name}}" class="w-10 h-10">
                        @else
                            <img src="/images/avatar-generic.webp" alt="avatar generic" class="w-10 h-10">
                        @endif
                        <div class="">
                            <div class="flex gap-2">
                                <h3>{{$post->user->name}}</h3>
                                &middot;
                                <a href="#" class="text-emerald-400">Follow</a>

                            </div>

                            <div class="flex gap-2 text-gray-400">
                                {{$post->readTime()}} min read
                                &middot;

                                    {{ $post->created_at->format('M d, Y') }}

                            </div>
                        </div>
                    </div>
                </div>


        </div>
    </div>
</x-app-layout>
