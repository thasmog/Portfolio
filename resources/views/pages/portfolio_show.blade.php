@extends('layouts.master')

@section('title', 'Portfolio {{$article->title}}')
@section('description', 'This is a description')
@section('keywords', 'These, are, keywords')
@section('content')
<div class="container">
    <section class="full box">
            <a href="{{url('articles/'.$article->slug)}}">
                <img src="{{$article->image}}" class="blog-img">
            </a>
            <div class="post-meta">
            <h4>{{$article->title}}</h4>
                <ul>
                    <li><i class="fa fa-clock-o"></i> {{$article->created_at->diffForHumans()}}</li>
                    <li><i class="fa fa-folder"></i> <a href="/categories/{{ $article->category->slug }}">{{ $article->category->name }}</a></li>
                    <li><i class="fa fa-tags"></i> @foreach($article->tags as $key => $tag)<a href="/tags/{{ $tag->slug }}"> {{ $tag->name }}</a>@endforeach</li>
                </ul>
            </div>
            <p>{!! $article->body_html !!}</p>
            @unless(is_null($article->original) || empty($article->original))
			    <p>Source:<br>{{ $article->original }}</p>
		    @endunless
    </section>
</div>
@endsection