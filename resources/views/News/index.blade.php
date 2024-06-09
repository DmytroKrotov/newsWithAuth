<x-layout>
    <div class="bg-gradient-to-r from-blue-300 to-purple-500 flex justify-center items-center">

        <section class="text-gray-600 body-font overflow-hidden">

            <div class="container px-5 py-24 mx-auto">

                <div class="-my-8 divide-y-2 divide-gray-100">
                    @foreach($news as $item)
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-bold title-font text-gray-700">{{$item->summary}}</span>

                        </div>
                        <div class="md:flex-grow">
                            <h2 class=" font-medium text-gray-900 title-font mb-2">{{$item->short_description}}</h2>

                            <a href="{{route('article',['id'=>$item->id])}}" class="text-indigo-500 inline-flex items-center mt-4">Read More
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>

        </section>

    </div>
</x-layout>
