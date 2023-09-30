<nav class="mt-6 flex items-center justify-evenly ">
    

    <div class="shadow-lg shadow-red-500 md:shadow-xl text-blue-500 border border-gray-300 rounded-full p-3 ml-10">
        <ul class="-my-2 text-base  divide-zinc-100 text-zinc-800 flex ">
            <li>
                <a href="/" class="text-aqua @if(request()->is('/')) text-red-500 @endif">Home</a>
            </li>
            <li class="pl-7">
                <a href="/workshops" class=" @if(request()->is('workshops')) text-red-500 @else text-black @endif">Workshops</a>
            </li>
        </ul>
    </div>
    <div class="mr-20 rounded-full p-2  shadow-md  ">
        <img src="{{asset('images/images/logos/moon.png')}}" alt="Image 12" class="w-6 h-6 cursor-pointer rounded-3xl" onclick="toggleDarkMode()" id="icon">
    </div>
</nav>


<script>
    function toggleDarkMode() {
        document.body.classList.toggle('dark-mode');
        document.getElementById("semi-body").classList.toggle("semidark-mode");
        document.getElementById("darkmode-table").classList.toggle("darkmode-table")

        let icon = document.getElementById("icon")

        if (document.body.classList.contains("dark-mode")) {
            icon.src = " {{asset('images/images/logos/sun.png')}}";
        } else {
            icon.src = "{{asset('images/images/logos/moon.png')}}"
        }

    }
</script>