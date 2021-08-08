@extends('layout')

@section('title', isset($user) ? 'Update user' : 'Form')

@section('content')

    <a href="{{ route('user.index') }}" type="button" class="btn btn-primary">Back</a>
    <form method="POST"
        action="{{ isset($user) ? route('user.update', $user) : route('user.store') }}"
          class="mt-3">
        @csrf
        @if (isset($user))
            @method('PUT')
        @endif
        <div class="row">
            <div class="col">
                <input name="name"
                       value="{{ old('name', isset($user) ? $user->name : '') }}"
                       type="text" class="form-control" placeholder="Name" aria-label="name">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <input name="email"
                       value="{{ old('email', isset($user) ? $user->email : '') }}"
                       type="text" class="form-control" placeholder="Email" aria-label="email">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <button type="submit" class="btn btn-success">{{ isset($user) ? "Update" : "Create" }}</button>
            </div>
        </div>
    </form>

@endsection
