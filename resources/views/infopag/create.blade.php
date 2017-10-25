@extends('layouts.main')



@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-1"></div>
                    <div class="col-md-10">

                        <h1>Cadastro Forma de Recebimento</h1>

                        <br>

                        {!! Form::model($model, ['route' => 'infopag.store', 'class'=>'form-horizontal ','files'=>true]) !!}

                        @include('infopag._form')

                        {!! Form::submit('Cadastrar forma de recebimento',
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
