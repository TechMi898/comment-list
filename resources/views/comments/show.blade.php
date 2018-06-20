@extends('layouts.app')
@section('content')

    <h1>id={{ $comment -> id }} のコメント詳細ページ</h1>
    
    <p>{{ $comment->content }}</p>
    
    {!! link_to_route('comments.edit', 'このコメントを編集', ['id' => $comment->id]) !!}
    
    {!! Form::model($comment, ['route' => ['comments.destroy', $comment->id], 'method' => 'delete']) !!}
    
        {!! Form::submit('削除') !!}

@endsection