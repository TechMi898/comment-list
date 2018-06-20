@extends('layouts.app')
@section('content')

    <h1>コメント一覧</h1>
    
    @if (count($comments) > 0)
        <ul>
            @foreach ($comments as $comment)
                <li>{!! link_to_route('comments.show', $comment->id, ['id' => $comment->id]) !!} : {{ $comment->content }}</li>
            @endforeach
        </ul>
    @endif

    {!! link_to_route('comments.create', '新規コメントの投稿') !!}
    
@endsection