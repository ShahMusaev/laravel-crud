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
        <td>
            <a href="{{ route('user.show', $user) }}"> {{ $user->name }} </a>
        </td>
        <td>
            <a href="{{ route('user.show', $user) }}"> {{ $user->email }} </a>
        </td>
        <td>
            <form action=" {{ route('user.destroy', $user) }}" method="POST">
                <a href="{{ route('user.edit', $user) }}" type="button" class="btn btn-warning" >Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" >Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

    </tbody>
</table>

    {{ $users->links() }}
@endsection
