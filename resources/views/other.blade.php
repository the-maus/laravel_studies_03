@extends('layouts.other_layout')

@section('page_title', 'Other Page')

@section('top_bar')
    @parent
    <div>Additional content for Top Bar</div>
@endsection


@section('content')
    <p>My View Content</p>
@endsection

@section('bottom_bar')
    <p>Bottom bar content</p>
@endsection