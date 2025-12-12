@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    @if ($errors->any())
        <div class="status" style="background:#fef2f2; color:#991b1b; border-color:#fecaca;">
            <strong>There were some issues with your submission:</strong>
            <ul style="margin:0.5rem 0 0 1rem;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input id="title" name="title" type="text" value="{{ old('title', $post->title) }}" required>
        </div>
        <div>
            <label for="body">Body</label>
            <textarea id="body" name="body" required>{{ old('body', $post->body) }}</textarea>
        </div>
        <div class="actions">
            <button class="btn primary" type="submit">Update</button>
            <a class="btn" href="{{ route('posts.show', $post) }}">Cancel</a>
        </div>
    </form>
@endsection
