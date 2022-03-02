@extends('layout.header')

@section('content')
    <h1>Hello {{$title}}!! Welcome to the Blog</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam doloribus quaerat tenetur sint blanditiis ex ipsum ducimus deserunt laboriosam necessitatibus fuga facere dolores quod voluptate animi quasi, nam incidunt consectetur?</p>
    <ul>
        @foreach ($services as $services)
            <li>{{$services}}</li>
        @endforeach
        
    </ul>
@endsection