@extends('layouts.app')

@section('content')
    <div class="actions" style="justify-content: space-between; margin-bottom: 1rem;">
        <div>
            <h1 style="margin: 0;">{{ $post->title }}</h1>
            <p class="muted" style="margin: 0.25rem 0 0;">Published {{ $post->created_at->format('M d, Y h:i A') }}</p>
        </div>
        <div class="actions">
            <a class="btn" href="{{ route('posts.edit', $post) }}">Edit</a>
            <a class="btn" href="{{ route('posts.index') }}">Back</a>
        </div>
    </div>

    <p style="line-height: 1.6; white-space: pre-wrap;">{{ $post->body }}</p>
@endsection
