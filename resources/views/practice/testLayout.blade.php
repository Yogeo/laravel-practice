@extends('layouts.testLayout')

@section('title', 'Layout Test')

@section('menubar')
    @parent
    Layout Test Page
@endsection

@section('content')
    <p>this is main content section.</p>
@endsection

@section('footer')
copyright 2018 tutti.
@endsection