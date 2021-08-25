@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-ld-8">
            <h2 class="mb-3">{{ $post->title }}</h2>

            <article>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather='arrow-left'></span> Back to all my posts</a>
                <a href="" class="btn btn-warning"><span data-feather='edit'></span> Edit</a>
                <a href="" class="btn btn-danger"><span data-feather='x-circle'></span> Delete</a>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

            </article>
            <a href="/posts" class="text-decoration-none d-block mt-3">Back to posts</a>

        </div>
    </div>
</div>

@endsection