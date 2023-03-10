@extends('layouts.main')
@section('title', 'Detail Users')

@section('content')
<h1>User Detail</h1>
<style>
    .form-detail{
      border: 1px solid #F0EEED;
      padding: 30px;
      width: 700px;
      border-radius: 10px;
    }
  </style>

<div class="mt-4 d-flex justify-content-end">
    @if($user->status == 'inactive')
    <a href="/users-approve/{{$user->slug}}" class="btn btn-primary me-3">Approve User</a>
    <a href="/users-registered" class="btn btn-secondary">Back</a>
    @else
    <a href="/user" class="btn btn-secondary">Back</a>
    @endif
</div>

    @if (session('status'))
        <div class="alert alert-success mt-3">
            {{ session('status') }}
        </div>
    @endif

<div class="mt-4">
    <div class="form-detail">
    <div class="mb-3 ">
        <label for="" class="form-label">Username</label>
        <input type="text" class="form-control" readonly value="{{$user->username}}">
    </div>
    <div class="mb-3 ">
        <label for="" class="form-label">Phone</label>
        <input type="text" class="form-control" readonly value="{{$user->phone}}">
    </div>
    <div class="mb-3 ">
        <label for="" class="form-label">Address</label>
        <input type="text" class="form-control" readonly value="{{$user->address}}">
    </div>
    <div class="mb-3 ">
        <label for="" class="form-label">Status</label>
        <input type="text" class="form-control" readonly value="{{$user->status}}">
    </div>
    </div>
</div>


@endsection