@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('users') }}">Voltar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if( Request::is('*/edit'))
                        <form action="{{ url('users/update') }}/{{ $user->id}}" method="post">
                        @csrf
                            <div class="form-group">
                                <label for="inputName">Nome</label>
                                <input
                                    type="text"
                                    name="name"
                                    class="form-control"
                                    value="{{ $user -> name }}"
                                    id="inputName"
                                    aria-describedby="emailHelp"
                                    placeholder="Nome"
                                >
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input
                                    type="email"
                                    name="email"
                                    class="form-control"
                                    value="{{ $user -> email }}"
                                    id="inputEmail"
                                    aria-describedby="emailHelp"
                                    placeholder="Email"
                                >
                            </div>
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </form>
                    @else
                        <form action="{{ url('users/add') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="inputName">Nome</label>
                                <input
                                    type="text"
                                    name="name"
                                    class="form-control"
                                    id="inputName"
                                    aria-describedby="emailHelp"
                                    placeholder="Nome"
                                >
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input
                                    type="email"
                                    name="email"
                                    class="form-control"
                                    id="inputEmail"
                                    aria-describedby="emailHelp"
                                    placeholder="Email"
                                >
                            </div>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </form>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
