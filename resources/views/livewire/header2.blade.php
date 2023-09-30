<header class="pl-2 pt-30  mt-16 w-100  pr-2">
@foreach($data as $itemdata)
<div class="  pt-1 ">
    <h1 class=" max-w-xl text-3xl sm:text-5xl font-semibold" >{{$itemdata["heading"]}}</h1>
</div>
<br>
<hr class="w-70">
<p class="mt-6 text-base abstract max-w-2xl text-gray-500">{{$itemdata["description"]}}</p>
<br>
@endforeach
</header>

