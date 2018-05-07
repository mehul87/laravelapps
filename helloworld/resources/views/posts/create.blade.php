@extends('layouts.app')
@section('content')
<h1>Create post</h1>
{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
    <div class='form-group'>
    {{form::label('title','Title')}}
    {{form::text('title','',['class' => 'form-control','placeholder' => 'title'])}}
    </div>
    <div class='form-group'>
    {{form::label('body','Body')}}
    {{form::textarea('body','',['id' => 'article-ckeditor','placeholder' => 'Body Text'])}}
    </div>
    {{form::submit('Submit',['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection