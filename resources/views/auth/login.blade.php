@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card title="Inicio de Sesion">
                <b-alert show>
                    Por Favor Ingresa Tus Datos
                </b-alert>

            <b-form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                    <b-form-group
                        label="Correo Electronico"
                        label-for="email"
                        description="Nunca compartiremos tu correo. Esta seguro con nosotros.">

                        <b-form-input type="email"
                        id="email" name="email"
                        value="{{ old('email') }}" required autofocus
                        placeholder="example@mktvgt.com">
                        </b-form-input>

                    </b-form-group>

                    <b-form-group label="Contraseña" label-for="password">
                        <b-form-input type="password"
                            id="password" name="password"
                            value="{{ old('password') }}" required>
                        </b-form-input>

                    </b-form-group>

                    <b-form-group>
                        <b-form-checkbox name="remember"
                        {{ old('remember') ? 'checked="true"' : '' }}>

                            Recordar Sesion

                        </b-form-checkbox>
                    </b-form-group>

                    <b-form-group>
                        <b-button type="submit" variant="primary">Ingresar
                        </b-button>

                        <b-button href="{{ route('password.request') }}" variant="link">¿Olvidaste tu Contraseña?
                        </b-button>

                    </b-form>

        </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
