@extends('layouts.app')

@section('content')
    <h1>Create an Account</h1>

    @if ($errors->any())
        <div class="status" style="background:#fef2f2; color:#991b1b; border-color:#fecaca;">
            <strong>We found some issues:</strong>
            <ul style="margin:0.5rem 0 0 1rem;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/register">
        @csrf
        <div>
            <label for="name">Name</label>
            <input id="name" name="name" type="text" value="{{ old('name') }}" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" name="password" type="password" required>
        </div>
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" name="password_confirmation" type="password" required>
        </div>
        <div class="actions">
            <button class="btn primary" type="submit">Register</button>
            <a class="btn" href="/login">Already have an account?</a>
        </div>
    </form>
@endsection
