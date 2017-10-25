@extends('layouts.main')



@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">

                        <h1>Listagem Moedas Cadastradas</h1>
                        @if(session()->has('message.level'))
                            <div class="alert alert-{{ session('message.level') }}">
                                {!! session('message.content') !!}
                            </div>
                        @endif
                        <table class="table table-striped table-bordered table-hover">
                            <tr>

                                <td>Nome Moeda</td>
                                <td>Sigla</td>
                                <td>

                                    <span>visualizar</span>

                                </td>
                                <td>

                                    <span>editar</span>

                                </td>
                                <td>

                                    <span>apagar</span>

                                </td>
                            </tr>

                            @foreach($model as $m)
                                <tr>

                                    <td>{{ $m->NO_MOEDA }} </td>
                                    <td>{{ $m->SG_MOEDA }} </td>
                                    <td>
                                        <a href="visualizar/{{$m->ID_MOEDA}} ">
                                            <span class="glyphicon glyphicon-eye-open"></span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="edit/{{$m->ID_MOEDA}} ">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="delete/{{$m->ID_MOEDA}} ">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </table>

                        {!! $model->render(); !!}


                        <div>
                            <a href="{{ URL::route('moedas.create') }}" class="form-control btn btn-primary">Cadastrar uma nova moeda</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
