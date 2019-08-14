@extends('master')

@section('page-title', 'Register')

@section('content')
    <form action="{{ route('register_post') }}" method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="Name" required>
        <input type="number" name="age" id="age" placeholder="Age"  required>
        <textarea name="address" id="address" cols="30" rows="10"></textarea>
        <button type="submit" name="register">Register</button>
    </form>
@endsection