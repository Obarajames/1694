<nav class="mt-6 flex items-center justify-between">
    <div ml-10>

    </div>
    <div class="shadow-lg shadow-red-500 md:shadow-xl text-blue-500 border border-gray-300 rounded-full p-3">
    <ul class="-my-2 text-base divide-y divide-zinc-100 text-zinc-800 flex dark:divide-zinc-100/5 dark:text-zinc-300">
        <li>
            <a href="/"  class="text-aqua @if(request()->is('/')) text-red-500 @endif">Home</a>
        </li>
        <li class="pl-7">
            <a href="/workshops" class=" @if(request()->is('workshops')) text-red-500 @endif">Workshops</a>
        </li>
    </ul>
</div>



    <div class="flex space-x-2">
        <i class="fas fa-moon moon cursor-pointer" id="moonIcon"></i>
        <i class="fas fa-sun sun cursor-pointer hidden md:visible" id="sunIcon"></i>
    </div>

    
</nav>


<script>
    const moonIcon = document.getElementById('moonIcon');
    const sunIcon = document.getElementById('sunIcon');

    moonIcon.addEventListener('click', () => {
        moonIcon.style.display = 'none';
        sunIcon.style.display = 'inline-block';
    });

    sunIcon.addEventListener('click', () => {
        sunIcon.style.display = 'none';
        moonIcon.style.display = 'inline-block';
    });
</script>