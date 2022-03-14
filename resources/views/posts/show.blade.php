@extends('layout.app')

@section('content')
    <a href="/posts" class="btn btn-primary">Back</a>
    <h1>{{$post->title}}</h1>
    <div class="card">
        <div class="card-body">
            {{$post->body}}
            <hr>
            <small>Written on {{$post->created_at}}</small>
        </div> 
    </div>
    <br>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
    <br><br>
    {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'DELETE'])!!}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection