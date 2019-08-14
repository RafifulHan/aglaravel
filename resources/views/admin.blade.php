@extends('master')

@section('page-title', 'Admin Page')

@section('content')
 
    <form action="{{ route('search') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Search" class="search" value="{{ old('search') }}">
        <button type="submit" name="search">Search</button>
    </form>

    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th colspan="2">Info</th>
        </tr>

    @foreach ($dates as $date)
        <tr>
            <td>{{ $date->name }}</td>
            <td>{{ $date->age }}</td>
            <td>{{ $date->address }}</td>
            <td><a href="{{ route('update', $date->id) }}">Update</a></td>
            <td><a href="{{ route('delete', $date->id) }}">Delete</a></td>
        </tr>
    @endforeach
    </table>


@endsection