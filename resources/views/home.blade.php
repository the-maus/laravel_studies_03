@extends('layouts.main_layout')
@section('content')

<div class="text-center">
    @foreach ($person_languages as $person => $languages)
        {{-- component --}}
        <x-person-card :person-name="$person" :person-languages="$languages"/>
    @endforeach
</div>

@endsection