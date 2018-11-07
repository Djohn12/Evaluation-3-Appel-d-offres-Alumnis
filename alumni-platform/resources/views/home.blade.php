@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('message'))
    <div class="alert {{Session::get('flash_type')}}">
        <p>{{ Session::get('message') }}</p>
    </div>
    @endif
    <h1>Liste des différentes publications :</h1>
    @if($posts)
        @foreach($posts as $id => $post)
            <div class="post row justify-content-center">
                <div class="col-md-10">
                    <div class="card text-center">
                        <div class="card-header">
                            <div class="text-right">Dernière mise à jour le {{$post->updated_at}}</div>
                            <div class="card-title">
                                <h2>{{$post->type->type}} : {{$post->title}}</h2>
                            </div>
                        </div>
                        <div class="card-body">{{substr($post->content, 0, 100). '...'}}</div>
                        <div>
                            <p>Publié par {{$post->author}}
                            le {{$post->created_at}}</p>
                        </div>
                    </div>
                    
                </div>                
            </div>
        @endforeach
        {{$posts->links()}}
    @endif
</div>
@endsection
