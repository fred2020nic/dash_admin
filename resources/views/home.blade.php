@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in! hola cambio de git para ver si se actualiza en hostinger - lo camvbiamos a privado  1920222222 - 3333') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
