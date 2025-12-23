@extends('layouts.main_layout')
@section('content')
<h3>This text is part of the view</h3>

{{-- render component --}}
<x-my-component />

{{-- render component thats inside subfolder --}}
<x-admin.admin-card />

<h3>This text is part of the view</h3>

@endsection