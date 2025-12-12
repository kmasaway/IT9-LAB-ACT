@extends('layouts.app')

@section('content')
    <h1>Welcome, {{ auth()->user()->name }}!</h1>
    <p class="muted">You are logged in as {{ auth()->user()->email }}.</p>

    <form method="POST" action="/logout" style="margin-top: 1rem;">
        @csrf
        <button class="btn" type="submit">Logout</button>
    </form>
@endsection
