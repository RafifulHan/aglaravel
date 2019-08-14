@extends('master')

@section('page-title' , 'Update')

@section('content')
    <form action="{{ route('update_post') }}" method="post">
        @csrf
    @foreach ($whup as $whup)
        <input type="hidden" name="id" value="{{ $whup->id }}">
        <input type="text" name="name" id="name" placeholder="Name" value="{{ $whup->name }}" required>
        <input type="number" name="age" id="age" placeholder="Age" value="{{ $whup->age }}" required>
        <textarea name="address" id="address" cols="30" rows="10">{{ $whup->address }}</textarea>
        <button type="submit" name="update">Update</button>
    @endforeach
    </form>
@endsection