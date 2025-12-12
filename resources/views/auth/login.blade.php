@extends('layouts.app')

@section('content')
    <h1>Login</h1>

    @if ($errors->any())
        <div class="status" style="background:#fef2f2; color:#991b1b; border-color:#fecaca;">
            <strong>Login failed:</strong>
            <ul style="margin:0.5rem 0 0 1rem;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/login">
        @csrf
        <div>
            <label for="email">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" name="password" type="password" required>
        </div>
        <div class="actions">
            <button class="btn primary" type="submit">Login</button>
            <a class="btn" href="/register">Create account</a>
        </div>
    </form>
@endsection
