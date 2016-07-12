@extends('layouts.master')

@section('title', 'Portfolio')
@section('description', 'This is a description')
@section('keywords', 'These, are, keywords')
@section('content')
    @if (count($data['portfolios']))
        <section class="container box center">
            <div class="row">
                @foreach ($data['portfolios'] as $portfolio)
                    <div class="third">
                        <a style="display:block;" href="{{url('portfolio/'.$portfolio->url)}}">
                            <figure>
                                <figcaption><b>{{$portfolio->title}}</b></figcaption>
                                <img src="{{$portfolio->image}}">
                                <figcaption>{{$portfolio->description}}</figcaption>
                            </figure>
                        </a>
                    </div>
                @endforeach
            </div>
            {!! $data['portfolios']->render() !!}
        </section>
    @endif
@endsection
