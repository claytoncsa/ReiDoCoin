@extends('layouts.main')



@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">

                        <h1>Selecione uma moeda</h1>
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

                                    <span>selecionar</span>

                                </td>

                            </tr>

                            @foreach($model as $m)
                                <tr>

                                    <td>{{ $m->NO_MOEDA }} </td>
                                    <td>{{ $m->SG_MOEDA }} </td>

                                    <td>
                                        <a href="infopag/create/{{$m->ID_MOEDA}} ">
                                            <span class="glyphicon glyphicon-ok"></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </table>

                        {!! $model->render(); !!}


                        <div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
