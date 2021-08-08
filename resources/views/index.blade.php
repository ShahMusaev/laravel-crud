@extends('layout')

@section('title')
    Users
@endsection

@section('content')
<table class="table">
    <a class="btn btn-primary" role="button" href="{{ route('user.create') }}">Create user</a>
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
    <tr>
        <th scope="row">{{ $user->id }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            <a href="{{ route('user.edit', $user) }}" type="button" class="btn btn-warning" >Edit</a>
        </td>
    </tr>
    @endforeach

    </tbody>
</table>
@endsection
