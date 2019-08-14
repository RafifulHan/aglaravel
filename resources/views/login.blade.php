@extends('master')

@section('page-title', 'Register')

@section('content')
    <form action="{{ route('login_post') }}" method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="Name" required>
        <input type="number" name="age" id="age" placeholder="Age"  required>
        <button type="submit" name="login">Login</button>
    </form>
@endsection