@extends('layouts.main')



@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">

                        <h1>Listagem Formas de recebimento</h1>
                        @if(session()->has('message.level'))
                            <div class="alert alert-{{ session('message.level') }}">
                                {!! session('message.content') !!}
                            </div>
                        @endif
                        <table class="table table-striped table-bordered table-hover">
                            <tr>

                                <td>Carteira</td>
                                <td>Moeda</td>
                                <td>Tempo de Recebimento</td>
                                <td>Valor Minimo</td>
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

                                    <td>{{ $m->NUM_CARTEIRA }} </td>
                                    <td>{{ $m->ID_MOEDA }} </td>
                                    <td>{{ $m->TEMPO_PAG }} </td>
                                    <td>{{ $m->VALOR_MIN }} </td>
                                    <td>
                                        <a href="visualizar/{{$m->ID_INFO_PAG}} ">
                                            <span class="glyphicon glyphicon-eye-open"></span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="edit/{{$m->ID_INFO_PAG}} ">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="delete/{{$m->ID_INFO_PAG}} ">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </table>

                        {!! $model->render(); !!}


                        <div>
                            <a href="{{ URL::route('moedas') }}" class="form-control btn btn-primary">Cadastrar Tipo recebimento</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
