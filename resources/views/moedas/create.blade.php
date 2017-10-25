@extends('layouts.main')



@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-8">

                        <h1>Cadastro de Moedas</h1>

                        <br>

                        {!! Form::model($model, ['route' => 'moedas.store', 'class'=>'form-horizontal','files'=>true]) !!}

                        @include('moedas._form')

                        {!! Form::submit('Cadastrar moedas',
                                array(
                                        'class'=>'form-control btn btn-success'
                                        )) !!}

                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
