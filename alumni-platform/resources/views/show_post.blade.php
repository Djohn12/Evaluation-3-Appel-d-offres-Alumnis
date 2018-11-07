@extends('layouts.app')

@section('content')
<div class="container">
	@if($post)
		<div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card text-center">
                    <div class="card-header">
                        <div class="text-right">Dernière mise à jour le {{$post->updated_at}}
                        </div>
                        <div class="card-title">
                            <h3>{{$post->type->type}} : {{$post->title}}</h3>
                        </div>
                    </div>
                    <div class="card-body">{{$post->content}}</div>
                    <div>
                        <p>Publié par {{$post->author}}
                        le {{$post->created_at}}</p>
                    </div>
                </div>
            </div>                
        </div>
	@else
	<h1>Désolé, cette publication n'a pas pu être retrouvée, veuillez réessayer plus tard ou le signaler à nos services</h1>
	@endif
</div>

@endsection