@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-8 my-5">
            <h2 class="mb-3">{{ $post->title }}</h2>
            <a href="/dashboard/posts" class="badge bg-success text-decoration-none">Back to posts</a>
            <a href="" class="badge bg-warning text-decoration-none">Edit</a>
            <a href="" class="badge bg-danger text-decoration-none">Delete</a>

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>

        </div>
    </div>
</div>
@endsection
