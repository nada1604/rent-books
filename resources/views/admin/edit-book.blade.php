@extends('layouts.main')
@section('title', 'Edit Book')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<h1>Edit books</h1>
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
    @method('put')
    <div class="row">
        <div class="col">
            <label for="book_code" class="form-label mt-4">Book Code</label>
          <input type="text" name="book_code" id="book_code" class="form-control" placeholder="Book Code" value="{{$books->book_code}}">
        </div>
        <div class="col">
            <label for="title" class="form-label mt-4">Title</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="{{$books->title}}">
        </div>

        <div class="mb-3">
        <label for="image" class="form-label">Cover</label>
        <input type="file" name="image" id="image" class="form-control w-50">
        @if($books->cover != '' )
            <img src="{{asset('storage/cover/'.$books->cover)}}" alt="" width="200px">
        @else
            <img src="{{asset('img/not-found.jpg')}}" alt="" width="200px">
         @endif
        <label for="currentImage" class="form-label d-block">Current Cover</label>
    </div>
    </div>

    <label for="categories" class="for-label mt-4">Category</label>
        <select class="form-control select" name="categories[]" id="categories" multiple="multiple">
            @foreach($categories as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>

   <label for="listcategory" class="form-label">Current Category</label>
   <ul>
    @foreach($books->categories as $category)
    <li>{{$category->name}}</li>
    @endforeach
   </ul>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
        <button class="btn btn-primary me-md-2" type="submit">Update</button>
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