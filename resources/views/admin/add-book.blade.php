@extends('layouts.main')
@section('title', 'Add Book')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<h1>Add books</h1>
<style>
    .form-newbooks{
      border: 1px solid #F0EEED;
      padding: 30px;
      border-radius: 10px;
    }
</style>

<div class="form-newbooks mt-4">
@if ($errors->any())
          <div class="alert alert-danger w-50">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
 @endif

<form action="" method="post" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col">
            <label for="book_code" class="form-label mt-4">Book Code</label>
          <input type="text" name="book_code" id="book_code" class="form-control" placeholder="Book Code" aria-label="First name">
        </div>
        <div class="col">
            <label for="title" class="form-label mt-4">Title</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="Title" aria-label="Last name">
        </div>

        <label for="image" class="form-label mt-4">Cover</label>
        <input type="file" name="image" id="image" class="form-control">
    </div>

    <label for="categories" class="for-label mt-4">Category</label>
        <select class="form-control select" name="categories[]" id="categories" multiple="multiple">
            @foreach($categories as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
        <button class="btn btn-primary me-md-2" type="submit">Save</button>
    </div>
</form>
</div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select').select2();
    });
</script>
@endsection