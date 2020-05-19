@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu correo electronico') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un email de verificacion fue enviado a su correo electronico') }}
                        </div>
                    @endif

                    {{ __('Antes de proceder, chequee si le llego un mail de verificacion a su cuenta') }}
                    {{ __('Si no recibiste el email,') }}, <a href="{{ route('verification.resend') }}">{{ __('Clickea aqui para pedir nuevamente un reseteo de contraseña') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
