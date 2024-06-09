<x-layout>
    <div class="bg-gradient-to-r from-blue-300 to-purple-500 h-screen flex justify-center items-center">
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
                    <h2 class="text-gray-900 font-extrabold title-font tracking-wider text-2xl">{{$article->summary}}</h2>
                    <p class="text-gray-500 text-xl">{{$article->short_description}}</p>
                    <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
                    <p class="leading-relaxed text-lg">{{$article->full_text}}</p>
                    <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
                    <div>
                        <a href="{{route('comments.create',['newsId'=>$article->id])}}" class=" text-purple-500 inline-flex items-center">Add comment
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>


            </div>
            @if(count($comments)==0)
                <p class="leading-relaxed text-lg">No comments</p>
            @else
                    <div class="flex flex-wrap -m-4">
                        @foreach($comments as $comment)
                            <x-comments :comment="$comment"></x-comments>
                        @endforeach



                    </div>
            @endif

        </section>
    </div>

</x-layout>
