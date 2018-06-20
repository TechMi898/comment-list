@extends('layouts.app')
@section('content')

    <h1>コメント新規作成ページ</h1>
    
    {!! Form::model($comment, ['route' => 'comments.store']) !!}
    
        {!! Form::label('content', 'コメント:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('投稿') !!}
        
    {!! Form::close() !!}

@endsection