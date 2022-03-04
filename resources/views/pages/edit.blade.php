@extends('layout.header')
@section('content')
<h1>You are now in the posts page</h1>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos exercitationem nisi veritatis animi aliquid deleniti odit ad officia? Debitis ipsum, in beatae quidem quas facilis tenetur. Esse sunt dicta optio?</p>
    
@endsection
@section('posts')
<h1>Create Post</h1>
    <form action='/post/{{$post->id}}' method="POST">
        @method('PUT')
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" value={{$post->title}}>
        <label for="description">Description</label>
        <input type="textarea" name="description" value={{$post->description}}>
        <input type="submit">
    </form>
@endsection