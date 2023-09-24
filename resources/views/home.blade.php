@extends('layout')
@section('content')

<div class="mt-9">
  @livewire('navbar')
  <br>
  <br>
  @livewire('header')
  @livewire("Slantedimages")
  @livewire("Main ")
</div>



@endsection