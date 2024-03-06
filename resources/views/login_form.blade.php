@extends('templates/login_layout')

@section('content')
    <div class="login-wrapper">
        <div class="login-box">
            <h1>{{ $title }}</h1>
            <hr>
            <form action="{{ route('login_submit') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="text_username" class="form-label">Usuário</label>
                    <input type="text" name="text_username" id="text_username" class="form-control" placeholder="Usuário"
                        required value="{{ old('text_username')}}">
                    @error('text_username')
                        <div class="alert text-white p-1 mt-1">
                        {{ "*" . $errors->first('text_username') }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="text_password" class="form-label">Senha</label>
                    <input type="password" name="text_password" id="text_password" class="form-control" placeholder="Senha"
                        required value="{{ old('text_password')}}">
                    @error('text_password')
                        <div class="alert text-white p-1 mt-1">
                        {{ "*" . $errors->first('text_password') }}
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-dark w-100 ">Entrar</button>
                </div>

                @if(session()->has('login_error'))
                    <div class="alert alert-danger text-center p-1">
                        {{ session()->get('login_error') }}
                    </div>

                @endif
            </form>

            {{-- Mostrar mensagem de erro ao final da div --}}
            {{-- @if ($errors->any())
                <div class="alert alert-danger p-2">
                    @foreach ($errors->all() as $error)
                        <span class="validation">{{ $error }}</span>
                    @endforeach
                </div>
            @endif --}}

        </div>
    </div>
@endsection
