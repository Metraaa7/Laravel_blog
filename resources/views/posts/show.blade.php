@extends('layouts.main')

@section('content');
<main class="blog-post">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">{{$post->title}}</h1>
        <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">{{$date->format('F')}} {{$date->day}}, {{$date->year}} • {{$date->format('h:i')}} • Featured • {{$post->comments->count()}} Comments</p>
        <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
            <img src="{{asset('storage/' . $post->main_image)}}" alt="featured image" class="w-100">
        </section>

        <section class="post-content">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    {!! $post->content !!}
                </div>
            </div>
        </section>
       <div>
           <section class="mt-5">
               <div class="d-flex justify-content-between align-items-center">
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
                          <span>{{$post->liked_by_users_count}}<i class="ml-1 far fa-heart"></i></span>
                      </div>
                  @endguest
               </div>
           </section>
       </div>
        <div class="row">
            <div class="col-lg-9 mx-auto">
                @if($relatedPosts->count() > 0)
                <section class="related-posts">
                    <h2 class="section-title mb-4" data-aos="fade-up">Related Posts</h2>
                    <div class="row">
                        @foreach($relatedPosts as $rPost)
                        @endforeach
                        <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                            <img src="{{asset('storage/' . $rPost->preview_image)}}" alt="related post" class="post-thumbnail">
                            <p class="post-category">{{$rPost->category->title}}</p>
                            <a href="{{route('post.show', $rPost->id)}}"><h5 class="post-title">{{$post->title}}</h5></a>
                        </div>
                    </div>
                </section>
                @endif
                <section style="margin-top: -50px" class="mb-2">
                    <span class="text-bold font-italic font-weight-bold">Commentaries:</span>
                </section>
                <section class="comment-list mb-3">
                    @foreach($post->comments as $comment)
                        <div class="comment-text mb-2">
                        <span class="username">
                        <div> {{ $comment->user->name }}</div>
                        <span class="text-muted float-right">{{$comment->dateAsCarbon->diffForHumans()}}</span>
                        </span>
                          {{$comment->message}}
                        </div>
                    @endforeach
                </section>
                @auth()
                <section class="comment-section">
                    <h2 class="section-title mb-5" data-aos="fade-up">Leave a Reply</h2>
                    <form action="{{route('post.comment.store', $post->id)}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-12" data-aos="fade-up">
                                <label for="comment" class="sr-only">Comment</label>
                                <textarea name="message" id="comment" class="form-control" placeholder="Write something!" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12" data-aos="fade-up">
                                <input type="submit" value="Send Message" class="btn btn-warning">
                            </div>
                        </div>
                    </form>
                </section>
                @endauth
            </div>
        </div>
    </div>
</main>
@endsection