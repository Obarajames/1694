<div>
    <nav class="mt-6 flex items-center justify-between ">
        <div class="ml-20 ">
            <img src="{{ asset('images/apple-touch-icon.png') }}" alt="Image" class="rounded-full w-10 cursor-pointer">
        </div>

        <div class="relative">
            <!-- Trigger button for dropdown -->
            <button id="dropdownButton" class="text-blue-500 hover:text-red-500 md:hidden absolute right-0 top-0 mt-3 mr-3 flex p-3 rounded-s-full item-center ">
                <h1 class="">Menu </h1>
                <i class="fas fa-chevron-down"></i>
            </button>

            <!-- Hidden dropdown menu content -->
            <div id="dropdownMenu" class="md:hidden hidden absolute right-0 mt-12 bg-white border border-gray-300 rounded-lg shadow-lg">
                <ul class="py-2 px-4 space-y-2 text-zinc-800">
                    <li>
                        <a href="/" class="block @if(request()->is('/')) text-red-500 @endif">Home</a>
                    </li>
                    <li>
                        <a href="/workshops" class="block @if(request()->is('workshops')) text-red-500 @endif">Workshops</a>
                    </li>
                    <!-- Add more menu items if needed -->
                </ul>
            </div>
        </div>

        <div class="shadow-lg shadow-red-500 md:shadow-xl text-blue-500 border border-gray-300 rounded-full p-3 hidden md:flex bg-blue-400 ">
            <ul class="-my-2  text-base divide-y divide-zinc-100 text-zinc-800 flex dark:divide-zinc-100/5 dark:text-zinc-300">
                <li>
                    <a href="/" class="text-aqua @if(request()->is('/')) text-red-500 @endif">Home</a>
                </li>
                <li class="pl-7">
                    <a href="/workshops" class=" @if(request()->is('workshops')) text-red-500 @endif">Workshops</a>
                </li>
            </ul>
        </div>

        <div class="mr-10 rounded-full p-2  shadow-md  ">
            <img src="{{asset('images/images/logos/moon.png')}}" alt="Image 12" class="w-8 h-8 cursor-pointer rounded-full" onclick="toggleDarkMode()" id="icon">
        </div>

    </nav>
</div>

<script>
    function toggleDarkMode() {
        document.body.classList.toggle('dark-mode');
        document.getElementById("semi-body").classList.toggle("semidark-mode");

        let icon = document.getElementById("icon")

        if (document.body.classList.contains("dark-mode")) {
            icon.src = " {{asset('images/images/logos/sun.png')}}";
        } else {
            icon.src = "{{asset('images/images/logos/moon.png')}}"
        }
    }
</script>