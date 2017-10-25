<div class="row divform" >Informações para recebimento</div>
    <br>
        <div class="form-group">
            {!! Form::hidden('ID_USER', $usuario) !!}
            {!! Form::hidden('ID_MOEDA', $moeda) !!}
        </div>
        <div class="form-group">

            {!! Form::label('NUM_CARTEIRA', 'Número da Carteira') !!}
            {!! Form::text('NUM_CARTEIRA', null,
                array(
                      'class'=>'form-control',
                      'placeholder'=>'Número da Carteira')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('TEMPO_PAG', 'Tempo de Pagamento') !!}
            {!! Form::select('TEMPO_PAG', $tempo,null,
                  array(
                          'class' => 'form-control',
                          'placeholder' => 'Escoha um Tipo de Tempo')) !!}

        </div>
        <div class="form-group">
            {!! Form::label('VALOR_MIN', 'Valor minimo recebimento') !!}
            {!! Form::select('VALOR_MIN', $valormin,null,
                  array(
                          'class' => 'form-control',
                          'placeholder' => 'Escoha um valor para recebimento')) !!}

        </div>

</div>
<br><br>

