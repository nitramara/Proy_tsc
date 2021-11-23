@extends('layouts.app')

@section('template_title')
    {{ $registro->name ?? 'Show Registro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Registro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('registros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fechacreacionfichero:</strong>
                            {{ $registro->fechaCreacionFichero }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Id Receptor:</strong>
                            {{ $registro->tipo_id_receptor }}
                        </div>
                        <div class="form-group">
                            <strong>Num Id Receptor:</strong>
                            {{ $registro->num_id_receptor }}
                        </div>
                        <div class="form-group">
                            <strong>Forma De Pago:</strong>
                            {{ $registro->forma_de_pago }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo Banc Receptor:</strong>
                            {{ $registro->codigo_banc_receptor }}
                        </div>
                        <div class="form-group">
                            <strong>Oficina Cta Recepbbva:</strong>
                            {{ $registro->oficina_cta_recepbbva }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Cta Repbbva:</strong>
                            {{ $registro->Numero_cta_repbbva }}
                        </div>
                        <div class="form-group">
                            <strong>Cta Recp Nachan:</strong>
                            {{ $registro->cta_recp_nachan }}
                        </div>
                        <div class="form-group">
                            <strong>Num Cuenta Nachan:</strong>
                            {{ $registro->Num_cuenta_nachan }}
                        </div>
                        <div class="form-group">
                            <strong>Valor Ope Part Entera:</strong>
                            {{ $registro->valor_ope_part_entera }}
                        </div>
                        <div class="form-group">
                            <strong>Valor Ope Decimal:</strong>
                            {{ $registro->valor_ope_decimal }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Proceso:</strong>
                            {{ $registro->fecha_proceso }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Lim Pago:</strong>
                            {{ $registro->fecha_lim_pago }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Cobro:</strong>
                            {{ $registro->fecha_cobro }}
                        </div>
                        <div class="form-group">
                            <strong>Cod Ofc Pagadora:</strong>
                            {{ $registro->cod_ofc_pagadora }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Cobro:</strong>
                            {{ $registro->hora_cobro }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Receptor:</strong>
                            {{ $registro->nombre_receptor }}
                        </div>
                        <div class="form-group">
                            <strong>Detalle Devol:</strong>
                            {{ $registro->detalle_devol }}
                        </div>
                        <div class="form-group">
                            <strong>Concepto1:</strong>
                            {{ $registro->Concepto1 }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo Cajero:</strong>
                            {{ $registro->Codigo_cajero }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
