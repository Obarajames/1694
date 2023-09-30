@extends('layout')
@section('content')

<div class="mt-9 left-column pl-10 pr-10">
  @livewire('Workshopnavbar')
  @livewire('header2')
  @livewire('workshops2')
  @livewire('knowledge')
  <hr>
  @livewire('footer')
</div>

@endsection