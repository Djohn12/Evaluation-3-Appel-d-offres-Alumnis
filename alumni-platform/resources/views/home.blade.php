@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('message'))
    <div class="alert {{Session::get('flash_type')}}">
        <p>{{ Session::get('message') }}</p>
    </div>
    @endif


    @if($posts)
        @foreach($posts as $id => $post)
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card text-center">
                        <div class="card-header">
                            <div class="card-title">
                                <div class="">Document : {{$post->type->type}}</div>
                                <h1>{{$post->title}}</h1>
                            </div>
                            <div class="card-title"></div>
                        </div>
                        <div class="card-text">{{$post->content}}</div>
                        <div class="float-left">
                            <p>Publié par {{$post->author}}</p>
                            <p>Le {{$post->created_at}}</p>
                            <p>Dernière mise à jour le {{$post->updated_at}}</p>
                        </div>
                    </div>
                    
                </div>                
            </div>
        @endforeach

    @endif
</div>
@endsection
