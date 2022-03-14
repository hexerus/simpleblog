@extends('layout.app')

@section('content')
    <h1>{{$title}}</h1>
    @if (count($entries) > 0)
        <ul class="list-group">
            @foreach ($entries as $entry)
                <li class="list-group-item">
                    {{$entry}}
                </li>
            @endforeach
        </ul>
    @endif
@endsection
