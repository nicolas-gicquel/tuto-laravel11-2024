@extends('layouts.app')

@section('content')
    <div class="container">
        
        <div class="row justify-content-center">
            <h2 class="text-dark">Liste des Posts</h2>
            @foreach ($posts as $post)

            
            <article class="postcard dark blue">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
                </a>
                <div class="postcard__text">
                    <div class="postcard__subtitle small">
                        <time >
                            <i class="fas fa-calendar-alt mr-2"></i> Posté le {{$post->created_at->format('j/m/Y')}}
                        </time>
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">{{$post->content}}</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                        <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                        <li class="tag__item play blue">
                            <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                        </li>
                    </ul>
                </div>
            </article>
            @endforeach

            {{ $posts->links() }}
        </div>
    </div>
@endsection
