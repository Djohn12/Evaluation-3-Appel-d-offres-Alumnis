@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ __('Créez une nouvelle entrée') }}</h1></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('store_post') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-sm-4 col-form-label text-md-right">Titre</label>

                            <div class="col-md-6">
                                <input id="title" type="text" name="title" placeholder="Mon Super Titre">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="type" class="col-sm-4 col-form-label text-md-right">Type du document</label>

                            <div class="col-md-6">
                                <select id="type" name="type">
                                    @foreach ($types as $id => $type)
                                    <option value="{{$type->id}}">{{$type->type}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group justify-content-center">
                            <label for="content" class="col-md-12 col-form-label text-md-center">Contenu de l'article</label>
                            <div class="col-md-12 text-md-center">
                                <textarea class="form-control" id="content" name="content" placeholder="Je vais vous parler aujourd'hui d'une fameuse technologie..."></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-danger">
                                    {{ __("Envoyer l'article") }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
