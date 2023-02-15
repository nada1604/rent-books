@extends('layouts.main')
@section('title', 'Update Category')

@section('content')
<h1>Update Category</h1>
@if ($errors->any())
          <div class="alert alert-danger w-50">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
    @endif
<form action="/category-edit/{{$category->slug}}" method="post">
    @csrf
    @method('put')
    
    <label for="name" class="form-label mt-4">Category Name</label>
    <input type="text" name="name" class="form-control w-50" id="name" value="{{$category->name}}">
    <button type="submit"class="btn btn-success mt-4">Save</button>

</form>
    


@endsection