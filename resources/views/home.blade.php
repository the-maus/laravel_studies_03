@extends('layouts.main_layout')
@section('content')

{{-- <div class="text-center">
    @foreach ($person_languages as $person => $languages)
        <x-person-card :$person :$languages/>
    @endforeach
</div> --}}

{{-- components and slots --}}
{{-- the content inside the component's tags is shown on the $slot variable inside the component template  --}}
{{-- <div></div>
    <h4 class="text-info">How does a slot work?</h4>
    <x-other-card> 
        <h1 class="text-danger">This is the Slot!</h1>
    </x-other-card>
</div> --}}

{{-- multiple slot --}}
{{-- <x-multi-slot>
    <x-slot:title>This is the title</x-slot>
    <x-slot:content>This is the content</x-slot>
    <x-slot:footer>
        <ul>
            <li>1</li>
            <li>2</li>
            <li>3</li>
        </ul>
    </x-slot>
</x-multi-slot> --}}

<h4>Anonymous component</h4>
<x-alert-card>First message</x-alert-card>
<x-alert-card>Second message</x-alert-card>
<x-alert-card>Third message</x-alert-card>

@endsection