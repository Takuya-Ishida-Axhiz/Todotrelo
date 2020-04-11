@extends('layouts.default')

@section ('title')
todotrelo!
@endsection


@section('body')
            <h1>{{ $todocard->body }}</h1>
            <p>{{$todocard->body}}は楽しいのう。</p>
            <a href="{{ url('/') }}" class="header-menu">Back</a>
            
@endsection