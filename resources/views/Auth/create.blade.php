<x-layout>
    <div class="bg-gradient-to-r from-blue-300 to-purple-500 h-screen flex justify-center items-center">
        <div class="py-8 px-6 w-5/6 max-w-md bg-white bg-opacity-30 rounded-lg shadow-lg backdrop-blur-xl backdrop-filter">
            <h1 class="text-3xl font-extrabold text-center text-gray-800 mb-5">LogIn</h1>

            <form class="flex flex-col" method="post" action="{{route('auth.store')}}">
                @csrf

                <div class="mb-5">
                    <label class="text-gray-700 font-semibold mb-2" for="email">Email</label>
                    <input class="bg-transparent border rounded-lg shadow border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 py-2 px-4 block w-full appearance-none leading-normal" type="email" id="email" value="{{old('email')}}" name="email" required>
                </div>
                <div class="mb-5">
                    <label class="text-gray-700 font-semibold mb-2" for="password">Password</label>
                    <input class="bg-transparent border rounded-lg shadow border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 py-2 px-4 block w-full appearance-none leading-normal" type="password" id="password" name="password" required>
                </div>
                <button class="bg-gradient-to-r from-purple-400 to-indigo-500 text-white font-semibold py-2 rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out mb-5" type="submit">Create</button>
            </form>
        </div>
    </div>
</x-layout>
