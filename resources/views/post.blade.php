@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-8">
            <h2 class="mb-3">{{ $post->title }}</h2>

            <article>
                <p>By. <a class="text-decoration-none" href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

            </article>
            <a href="/posts" class="text-decoration-none d-block mt-3">Back to posts</a>

        </div>
    </div>
</div>


@endsection