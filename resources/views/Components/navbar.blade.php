
<div class="min-h-full">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between ">
                <div class="flex ">

                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="/" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">News</a>
                            <a href="/add" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Add news</a>
                        </div>
                    </div>


                </div>

                <div class="flex justify-between">

                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="{{route('auth.create')}}" class="hover:bg-gray-700 text-white rounded-md px-3 py-2 text-sm font-medium">{{Auth::user()?Auth::user()->name:'LogIn'}}</a>
{{--                            <a href="/logout" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">LogOut</a>--}}
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium" type="submit">LogOut</button>
                            </form>
                            <a href="{{route('register.create')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Register</a>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </nav>
</div>
