@extends('layout.master')
@section('title','Create Post')
@section('content')
<h3 class="headerinput">Add New Post</h3>
<form>
    <div class="mb-3">
      <input name="post_name" class="form-control" type="text" placeholder="Add Post" aria-label="default input example">
    </div>
    <button type="submit" class="btn btn-primary">Add Post</button>
  </form>
@endsection
