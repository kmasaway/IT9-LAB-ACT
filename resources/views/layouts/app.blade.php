<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog App</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f5f6fa; color: #222; }
        header { background: #1f2937; color: #fff; padding: 1rem 1.5rem; }
        header a { color: #fff; margin-right: 1rem; text-decoration: none; font-weight: 600; }
        main { max-width: 900px; margin: 2rem auto; background: #fff; padding: 1.5rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); }
        .actions { display: flex; gap: 0.5rem; align-items: center; }
        .btn { display: inline-block; padding: 0.5rem 0.9rem; border-radius: 6px; text-decoration: none; font-weight: 600; border: 1px solid #1f2937; color: #1f2937; transition: background 0.15s, color 0.15s; }
        .btn.primary { background: #1f2937; color: #fff; }
        .btn:hover { background: #111827; color: #fff; }
        form { display: flex; flex-direction: column; gap: 1rem; }
        label { font-weight: 600; }
        input, textarea { width: 100%; padding: 0.65rem; border-radius: 6px; border: 1px solid #d1d5db; }
        textarea { min-height: 180px; resize: vertical; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 0.75rem; border-bottom: 1px solid #e5e7eb; text-align: left; }
        .status { background: #ecfdf3; color: #065f46; border: 1px solid #bbf7d0; padding: 0.75rem 1rem; border-radius: 6px; margin-bottom: 1rem; }
        .muted { color: #6b7280; font-size: 0.95rem; }
    </style>
</head>
<body>
    <header>
        <a href="{{ route('posts.index') }}">Blog</a>
        <a href="{{ route('posts.create') }}">New Post</a>
    </header>
    <main>
        @if (session('status'))
            <div class="status">
                {{ session('status') }}
            </div>
        @endif
        @yield('content')
    </main>
</body>
</html>
