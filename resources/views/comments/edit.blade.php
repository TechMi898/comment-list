@extends('layouts.app')
@section('content')

    <h1>id: {{ $comment->id }} のコメント編集ページ</h1>
    
    {!! Form::model($comment, ['route' => ['comments.update', $comment->id], 'method' => 'put']) !!}
    
        {!! Form::label('content', 'コメント:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('更新') !!}
        
    {!! Form::close() !!}
    
@endsection