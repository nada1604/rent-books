@extends('layouts.main')
@section('title', 'User Banned')

@section('content')
<h1>List User Banned</h1>
<div class="mt-4 d-flex justify-content-end">
    <a href="/user" class="btn btn-primary me-3">Back</a>
</div>
<div class="mt-4">
    @if (session('status'))
        <div class="alert alert-success mt-3">
            {{ session('status') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <td>No. </td>
                <td>Username</td>
                <td>Phone</td>
                <td>Address</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($usersBanned as $value)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$value->username}}</td>
                <td>{{$value->phone}}</td>
                <td>{{$value->address}}</td>
                <td>
                    <a href="/users-restore/{{$value->slug}}" class="btn btn-danger me-3">Restore</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection