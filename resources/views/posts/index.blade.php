@extends('layout.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card">
                <div class="card-body">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}}</small>
                </div>
            </div>
        @endforeach
    @else
        <p>No posts found.</p>
    @endif
    <br>
    <a href="/posts/create" class="btn btn-primary">Create Post</a>
@endsection