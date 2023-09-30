<div class="flex  align-center justify-evenly ">
    @foreach($data as $itemsdata)
    <div>
        <h3 class=" font-bold">{{$itemsdata["title"]}}</h3>
    </div>

    <div class="text-sm text-centre text-zinc-400 dark:text-zinc-500 ">
        {{$itemsdata['detail']}}
    </div>

    @endforeach
</div>