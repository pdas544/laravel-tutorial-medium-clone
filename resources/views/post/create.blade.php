<x-app-layout>


    <div class="py-4">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8 w-1/2 mx-auto">
                    <form action="{{ route('post.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="">
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" class="block mt-1 w-full border p-1" type="title" name="title"
                                          :value="old('title')" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="content" :value="__('Content')" />
                            <x-textarea-input id="content" class="block mt-1 w-full border p-0" type="content" name="content"
                                              > {{old('content')}} </x-textarea-input>
                            <x-input-error :messages="$errors->get('content')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="category_id" :value="__('Category')" />
                            <select id="category_id" name="category_id" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full border" >
                                <option value="" class="text-gray-400"  )>--Select a Category--</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" @selected(old('category_id') == $category->id)>{{$category->name}}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="image" :value="__('Upload file')"/>
                            <x-text-input class="cursor-pointer border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full border" id="image" name="image" type="file" />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>
                        <x-primary-button class="mt-3">
                            {{ __('Submit') }}
                        </x-primary-button>
                    </form>
                </div>


        </div>
    </div>
</x-app-layout>
