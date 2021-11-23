<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fechaCreacionFichero') }}
            {{ Form::text('fechaCreacionFichero', $registro->fechaCreacionFichero, ['class' => 'form-control' . ($errors->has('fechaCreacionFichero') ? ' is-invalid' : ''), 'placeholder' => 'Fechacreacionfichero']) }}
            {!! $errors->first('fechaCreacionFichero', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_id_receptor') }}
            {{ Form::text('tipo_id_receptor', $registro->tipo_id_receptor, ['class' => 'form-control' . ($errors->has('tipo_id_receptor') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Id Receptor']) }}
            {!! $errors->first('tipo_id_receptor', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('num_id_receptor') }}
            {{ Form::text('num_id_receptor', $registro->num_id_receptor, ['class' => 'form-control' . ($errors->has('num_id_receptor') ? ' is-invalid' : ''), 'placeholder' => 'Num Id Receptor']) }}
            {!! $errors->first('num_id_receptor', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('forma_de_pago') }}
            {{ Form::text('forma_de_pago', $registro->forma_de_pago, ['class' => 'form-control' . ($errors->has('forma_de_pago') ? ' is-invalid' : ''), 'placeholder' => 'Forma De Pago']) }}
            {!! $errors->first('forma_de_pago', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo_banc_receptor') }}
            {{ Form::text('codigo_banc_receptor', $registro->codigo_banc_receptor, ['class' => 'form-control' . ($errors->has('codigo_banc_receptor') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Banc Receptor']) }}
            {!! $errors->first('codigo_banc_receptor', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('oficina_cta_recepbbva') }}
            {{ Form::text('oficina_cta_recepbbva', $registro->oficina_cta_recepbbva, ['class' => 'form-control' . ($errors->has('oficina_cta_recepbbva') ? ' is-invalid' : ''), 'placeholder' => 'Oficina Cta Recepbbva']) }}
            {!! $errors->first('oficina_cta_recepbbva', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero_cta_repbbva') }}
            {{ Form::text('Numero_cta_repbbva', $registro->Numero_cta_repbbva, ['class' => 'form-control' . ($errors->has('Numero_cta_repbbva') ? ' is-invalid' : ''), 'placeholder' => 'Numero Cta Repbbva']) }}
            {!! $errors->first('Numero_cta_repbbva', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cta_recp_nachan') }}
            {{ Form::text('cta_recp_nachan', $registro->cta_recp_nachan, ['class' => 'form-control' . ($errors->has('cta_recp_nachan') ? ' is-invalid' : ''), 'placeholder' => 'Cta Recp Nachan']) }}
            {!! $errors->first('cta_recp_nachan', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Num_cuenta_nachan') }}
            {{ Form::text('Num_cuenta_nachan', $registro->Num_cuenta_nachan, ['class' => 'form-control' . ($errors->has('Num_cuenta_nachan') ? ' is-invalid' : ''), 'placeholder' => 'Num Cuenta Nachan']) }}
            {!! $errors->first('Num_cuenta_nachan', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor_ope_part_entera') }}
            {{ Form::text('valor_ope_part_entera', $registro->valor_ope_part_entera, ['class' => 'form-control' . ($errors->has('valor_ope_part_entera') ? ' is-invalid' : ''), 'placeholder' => 'Valor Ope Part Entera']) }}
            {!! $errors->first('valor_ope_part_entera', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor_ope_decimal') }}
            {{ Form::text('valor_ope_decimal', $registro->valor_ope_decimal, ['class' => 'form-control' . ($errors->has('valor_ope_decimal') ? ' is-invalid' : ''), 'placeholder' => 'Valor Ope Decimal']) }}
            {!! $errors->first('valor_ope_decimal', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_proceso') }}
            {{ Form::text('fecha_proceso', $registro->fecha_proceso, ['class' => 'form-control' . ($errors->has('fecha_proceso') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Proceso']) }}
            {!! $errors->first('fecha_proceso', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_lim_pago') }}
            {{ Form::text('fecha_lim_pago', $registro->fecha_lim_pago, ['class' => 'form-control' . ($errors->has('fecha_lim_pago') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Lim Pago']) }}
            {!! $errors->first('fecha_lim_pago', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_cobro') }}
            {{ Form::text('fecha_cobro', $registro->fecha_cobro, ['class' => 'form-control' . ($errors->has('fecha_cobro') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Cobro']) }}
            {!! $errors->first('fecha_cobro', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cod_ofc_pagadora') }}
            {{ Form::text('cod_ofc_pagadora', $registro->cod_ofc_pagadora, ['class' => 'form-control' . ($errors->has('cod_ofc_pagadora') ? ' is-invalid' : ''), 'placeholder' => 'Cod Ofc Pagadora']) }}
            {!! $errors->first('cod_ofc_pagadora', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_cobro') }}
            {{ Form::text('hora_cobro', $registro->hora_cobro, ['class' => 'form-control' . ($errors->has('hora_cobro') ? ' is-invalid' : ''), 'placeholder' => 'Hora Cobro']) }}
            {!! $errors->first('hora_cobro', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_receptor') }}
            {{ Form::text('nombre_receptor', $registro->nombre_receptor, ['class' => 'form-control' . ($errors->has('nombre_receptor') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Receptor']) }}
            {!! $errors->first('nombre_receptor', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('detalle_devol') }}
            {{ Form::text('detalle_devol', $registro->detalle_devol, ['class' => 'form-control' . ($errors->has('detalle_devol') ? ' is-invalid' : ''), 'placeholder' => 'Detalle Devol']) }}
            {!! $errors->first('detalle_devol', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Concepto1') }}
            {{ Form::text('Concepto1', $registro->Concepto1, ['class' => 'form-control' . ($errors->has('Concepto1') ? ' is-invalid' : ''), 'placeholder' => 'Concepto1']) }}
            {!! $errors->first('Concepto1', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Codigo_cajero') }}
            {{ Form::text('Codigo_cajero', $registro->Codigo_cajero, ['class' => 'form-control' . ($errors->has('Codigo_cajero') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Cajero']) }}
            {!! $errors->first('Codigo_cajero', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>