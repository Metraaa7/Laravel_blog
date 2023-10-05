@extends('layouts.main')

@section('content');
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Blog</h1>
        <section class="featured-posts-section">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{ 'storage/' . $post->preview_image }}" alt="blog post">
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="blog-post-category">{{$post->category->title}}</p>
                            @auth()
                            <form action="{{route('post.like.store', $post->id)}}" method="post">
                               @csrf
                                <button type="submit" class="border-0 bg-transparent text-pink">
                                        @if(auth()->user()->likedPosts->contains($post->id))
                                            <span>{{$post->liked_by_users_count}}<i class="ml-1 fas fa-heart"></i></span>
                                        @else
                                            <span>{{$post->liked_by_users_count}}<i class="ml-1 far fa-heart"></i></span>
                                        @endif
                                </button>
                            </form>
                            @endauth
                            @guest()
                                <div>
                                    <i class="far fa-heart"></i>
                                </div>
                            @endguest
                        </div>
                        <a href="{{route('post.show', $post->id)}}" class="blog-post-permalink">
                            <h6 class="blog-post-title">{{$post->title}}</h6>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="mx-auto" style="margin-top: -100px">
                    {{$posts->links()}}
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-md-8">
                <section>
                    <div class="row blog-post-row">
                        @foreach($getRandPosts as $rPost)
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ 'storage/' . $rPost->preview_image }}" alt="blog post">
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="blog-post-category">{{$post->category->title}}</p>
                                    @auth()
                                    <form action="{{route('post.like.store', $post->id)}}" method="post">
                                        @csrf
                                        <button type="submit" class="border-0 bg-transparent text-pink">
                                                @if(auth()->user()->likedPosts->contains($post->id))
                                                    <span>{{$rPost->liked_by_users_count}}<i class="ml-1 fas fa-heart"></i></span>
                                                @else
                                                    <span>{{$rPost->liked_by_users_count}}<i class="ml-1 far fa-heart"></i></span>
                                                @endif
                                        </button>
                                    </form>
                                    @endauth
                                    @guest()
                                        <div>
                                            <span>{{$post->liked_by_users_count}}<i class="ml-1 far fa-heart"></i></span>
                                        </div>
                                    @endguest
                                </div>
                                <a href="{{route('post.show', $post->id)}}" class="blog-post-permalink">
                                    <h6 class="blog-post-title">{{$rPost->title}}</h6>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
            <div class="col-md-4 sidebar" data-aos="fade-left">
                <div class="widget widget-post-list">
                    <h5 class="widget-title">Popular posts</h5>
                    <ul class="post-list">
                        @foreach($likedPosts as $post)
                            <li class="post">
                                <div class="post-permalink media">
                                    <img src="{{ 'storage/' . $post->preview_image }}" alt="blog post">
                                    <div class="media-body">
                                        <h6 class="post-title">{{$post->title}}</h6>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="widget">
                    <h5 class="widget-title">Mini posts</h5>
                    <img src="{{ 'storage/' . $post->preview_image }}" alt="categories" class="w-100">
                </div>
            </div>
        </div>
    </div>

</main>
@endsection