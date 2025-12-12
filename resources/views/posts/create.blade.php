@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

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

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input id="title" name="title" type="text" value="{{ old('title') }}" required>
        </div>
        <div>
            <label for="body">Body</label>
            <textarea id="body" name="body" required>{{ old('body') }}</textarea>
        </div>
        <div class="actions">
            <button class="btn primary" type="submit">Save</button>
            <a class="btn" href="{{ route('posts.index') }}">Cancel</a>
        </div>
    </form>
@endsection
