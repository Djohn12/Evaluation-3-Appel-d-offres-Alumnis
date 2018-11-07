@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('message'))
    <div class="alert {{Session::get('flash_type')}}">
        <p>{{ Session::get('message') }}</p>
    </div>
    @endif
    <h1>Résultats de la recherche</h1>
    <form action="{{ route('filter_post') }}" method="GET">
        @csrf

        <fieldset>
            <legend>Effectuer une nouvelle recherche :</legend>
            <input type="checkbox" value="1" name="type[]">
            <label for="1">Articles</label>
            <input type="checkbox" value="3" name="type[]">
            <label for="2">Offres de stage</label>
            <input type="checkbox" value="4" name="type[]">
            <label for="3">Offres d'alternance</label>
            <input type="checkbox" value="2" name="type[]">
            <label for="4">Offres d'emploi</label>
            <input type="checkbox" value="5" name="type[]">
            <label for="5">Formations</label>
            <input type="checkbox" value="6" name="type[]">
            <label for="6">Ressources diverses</label>
        </fieldset>
        <button type="submit" class="btn btn-danger">Filtrer</button>
    </form>
    @if($posts)
        @foreach($posts as $id => $post)
            <a href="{{ route('show_post', $post->id)}}">
                <div class="post row justify-content-center">
                    <div class="col-md-10">
                        <div class="card text-center">
                            <div class="card-header">
                                <div class="text-right">Dernière mise à jour le {{$post->updated_at}}</div>
                                <div class="card-title">
                                    <h3>{{$post->type->type}} : {{$post->title}}</h3>
                                </div>
                            </div>
                            <div class="card-body">{{substr($post->content, 0, 100). '...'}}
                            </div>
                            <div>
                                <p>Publié par {{$post->author}}
                                le {{$post->created_at}}</p>
                            </div>
                        </div>
                        
                    </div>                
                </div>
            </a>
        @endforeach
    @endif
</div>
@endsection
