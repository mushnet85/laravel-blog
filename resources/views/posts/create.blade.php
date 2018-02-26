@extends('layouts.app')

@section('content')
        <h1>{{$title}}</h1>
        <p>Here you can create a post</p>
        
        
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'post']) !!}
        
        <div class="form-group">
                {{Form::label('title', 'Title')}} 
                {{Form::text('title','', ['class' => 'form-control', 'placeholder' => 'Title'])}}           
        </div>    
        <div class="form-group">
                {{Form::label('body', 'Body')}} 
                {{Form::textarea('body','', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body'])}}           
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}  
        {!! Form::close() !!}

@endsection    