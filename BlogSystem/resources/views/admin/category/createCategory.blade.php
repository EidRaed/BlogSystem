@extends('layout.master')
@section('title','Create Category')
@section('content')
<h3 class="headerinput">Add New Category</h3>
<form>
    <div class="mb-3">
      <input name="category_name" class="form-control" type="text" placeholder="Add Category" aria-label="default input example">
    </div>
    <button type="submit" class="btn btn-primary">Add Category</button>
  </form>
@endsection
