@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    @forelse ($posts as $key => $post)
        <div>{{$key}}.{{$post['title']}}</div>
    @empty
       No posts found 
    
    @endforelse
@endsection