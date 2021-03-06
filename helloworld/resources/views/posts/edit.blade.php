@extends('layouts.app')
@section('content')
<h1>Edit post</h1>
{!! Form::open(['action' => ['PostsController@update',$post->id], 'method' => 'POST']) !!}
    <div class='form-group'>
    {{form::label('title','Title')}}
    {{form::text('title',$post->title,['class' => 'form-control','placeholder' => 'title'])}}
    </div>
    <div class='form-group'>
    {{form::label('body','Body')}}
    {{form::textarea('body',$post->Body,['id' => 'article-ckeditor','placeholder' => 'Body Text'])}}
    </div>
    {{form::hidden('_method','PUT')}}
    {{form::submit('Submit',['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection