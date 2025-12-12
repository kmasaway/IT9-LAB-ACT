@extends('layouts.app')

@section('content')
    <div class="actions" style="justify-content: space-between; margin-bottom: 1rem;">
        <div>
            <h1 style="margin: 0;">Posts</h1>
            <p class="muted" style="margin: 0.25rem 0 0;">Manage your blog posts below.</p>
        </div>
        <a class="btn primary" href="{{ route('posts.create') }}">Create Post</a>
    </div>

    @if ($posts->isEmpty())
        <p class="muted">No posts yet. Create one to get started.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Created</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->created_at->format('M d, Y') }}</td>
                        <td class="actions">
                            <a class="btn" href="{{ route('posts.show', $post) }}">View</a>
                            <a class="btn" href="{{ route('posts.edit', $post) }}">Edit</a>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Delete this post?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div style="margin-top: 1rem;">
            {{ $posts->links() }}
        </div>
    @endif
@endsection
