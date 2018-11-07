@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('message'))
    <div class="alert {{Session::get('flash_type')}}">
        <p>{{ Session::get('message') }}</p>
    </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
            </div>
        </div>
    </div>
</div>
@endsection
