@extends('layouts.main_layout')
@section('content')
<h3>This text is part of the view</h3>

{{-- render component --}}
<x-my-component message="message passed into component"/>

{{-- render component thats inside subfolder --}}
<x-admin.admin-card :name="$myName" test="Hello, World"/>

<h3>This text is part of the view</h3>

<p>{{ $myName }}</p>

@endsection