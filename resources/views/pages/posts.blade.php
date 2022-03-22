@extends('layouts.app')
@section('content')
<h1>You are now in the posts page</h1>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos exercitationem nisi veritatis animi aliquid deleniti odit ad officia? Debitis ipsum, in beatae quidem quas facilis tenetur. Esse sunt dicta optio?</p>
    
@endsection
@section('posts')
<h1>Posts</h1>
@foreach ($posts as $posts)
            <p>{{$posts->id}}</p>
            <h3><a href="/post/{{$posts->id}}/edit">{{$posts->title}}</a></h3>
            <form action="/post/{{$posts->id}}" method="POST">
                @method('DELETE')
                @csrf

            <input type="submit" value="{{$posts->description}} ">
            
            </form>
            <a href="post/{{$posts->id}}">Read more</a>
            <small>{{$posts->created_at}}</small>
            <hr>
        @endforeach
       
<a href="/post/create" style="align-self: center;"><div style="
    background-color: teal;
    width:150px;
    height:60px;
    border-style: none;
    border-color: rgb(202, 58, 137);
    border-width:5px;
    font-weight: bold;
    font-size:1rem;
    color:white;
    justify-content:center;">create</div></a>
@endsection