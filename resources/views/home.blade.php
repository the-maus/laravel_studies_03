@extends('layouts.main_layout')
@section('content')

{{-- <div class="text-center">
    @foreach ($person_languages as $person => $languages)
        <x-person-card :$person :$languages/>
    @endforeach
</div> --}}

{{-- components and slots --}}
<div></div>
    <h4 class="text-info">How does a slot work?</h4>
    {{-- the content inside the component's tags is shown on the $slot variable inside the component template  --}}
    <x-other-card> 
        <h1 class="text-danger">This is the Slot!</h1>
    </x-other-card>
</div>

@endsection