@extends('layouts.app')

@section('content')
    <h1 style="margin-top:0;">Welcome back, {{ $user->name }}!</h1>
    <p class="muted">Signed in as {{ $user->email }}</p>

    <div style="display:grid; gap:1rem; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); margin: 1.25rem 0;">
        <div style="background:#f8fafc; border:1px solid #e5e7eb; padding:1rem; border-radius:8px;">
            <strong>Total Posts</strong>
            <div style="font-size:2rem; font-weight:700; margin-top:0.25rem;">{{ $postCount }}</div>
            <a class="btn" style="margin-top:0.75rem;" href="{{ route('posts.index') }}">View posts</a>
        </div>
        <div style="background:#f8fafc; border:1px solid #e5e7eb; padding:1rem; border-radius:8px;">
            <strong>Latest Post</strong>
            @if ($latestPost)
                <div style="margin-top:0.5rem; font-weight:700;">{{ $latestPost->title }}</div>
                <p class="muted" style="margin:0.25rem 0 0;">{{ $latestPost->created_at->format('M d, Y') }}</p>
                <div class="actions" style="margin-top:0.75rem;">
                    <a class="btn" href="{{ route('posts.show', $latestPost) }}">Open</a>
                    <a class="btn" href="{{ route('posts.edit', $latestPost) }}">Edit</a>
                </div>
            @else
                <p class="muted" style="margin-top:0.5rem;">No posts yet.</p>
                <a class="btn" style="margin-top:0.75rem;" href="{{ route('posts.create') }}">Create one</a>
            @endif
        </div>
        <div style="background:#f8fafc; border:1px solid #e5e7eb; padding:1rem; border-radius:8px;">
            <strong>Quick Actions</strong>
            <div class="actions" style="margin-top:0.75rem; flex-wrap:wrap;">
                <a class="btn primary" href="{{ route('posts.create') }}">New Post</a>
                <a class="btn" href="{{ route('posts.index') }}">Manage Posts</a>
            </div>
        </div>
    </div>
@endsection
