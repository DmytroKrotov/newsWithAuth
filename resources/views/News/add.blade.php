<x-layout>
    <div class="bg-gradient-to-r from-blue-300 to-purple-500 h-screen flex justify-center items-center">
        <div class="py-8 px-6 w-5/6 max-w-md bg-white bg-opacity-30 rounded-lg shadow-lg backdrop-blur-xl backdrop-filter">
            <h1 class="text-3xl font-extrabold text-center text-gray-800 mb-5">Create news</h1>

            <form class="flex flex-col" method="post" action="/add">
                @csrf
                <div class="mb-5">
                    <label class="text-gray-700 font-semibold mb-2" for="title">Title</label>
                    <input class="bg-transparent border rounded-lg shadow border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 py-2 px-4 block w-full appearance-none leading-normal" type="text" id="title" name="title" required>
                </div>
                <div class="mb-5">
                    <label class="text-gray-700 font-semibold mb-2" for="description">Description</label>
                    <input class="bg-transparent border rounded-lg shadow border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 py-2 px-4 block w-full appearance-none leading-normal" type="text" id="description" name="description" required>
                </div>
                <div class="mb-5">
                    <label class="text-gray-700 font-semibold mb-2" for="article">Article</label>
                    <textarea class="bg-transparent border rounded-lg shadow border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 py-2 px-4 block w-full appearance-none leading-normal" id="article" name="article" rows="5" required></textarea>
                </div>
                <button class="bg-gradient-to-r from-purple-400 to-indigo-500 text-white font-semibold py-2 rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out mb-5" type="submit">Create</button>
            </form>
        </div>
    </div>
</x-layout>
