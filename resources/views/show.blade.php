@extends('layout')

@section('title', 'User')

@section('content')
    <form action=" {{ route('user.destroy', $user) }}" method="POST">
        <a href="{{ route('user.index') }}" type="button" class="btn btn-primary mt-3">Back</a>
        <a href="{{ route('user.edit', $user) }}" type="button" class="btn btn-warning mt-3" >Edit</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mt-3" >Delete</button>
    </form>

    <div class="card mt-3" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $user->id }}</li>
            <li class="list-group-item">{{ $user->name }}</li>
            <li class="list-group-item">{{ $user->email }}</li>
        </ul>
    </div>
@endsection
