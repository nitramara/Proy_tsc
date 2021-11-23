@extends('layouts.app')

@section('template_title')
    Registro
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Registro') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('registros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Fechacreacionfichero</th>
										<th>Tipo Id Receptor</th>
										<th>Num Id Receptor</th>
										<th>Forma De Pago</th>
										<th>Codigo Banc Receptor</th>
										<th>Oficina Cta Recepbbva</th>
										<th>Numero Cta Repbbva</th>
										<th>Cta Recp Nachan</th>
										<th>Num Cuenta Nachan</th>
										<th>Valor Ope Part Entera</th>
										<th>Valor Ope Decimal</th>
										<th>Fecha Proceso</th>
										<th>Fecha Lim Pago</th>
										<th>Fecha Cobro</th>
										<th>Cod Ofc Pagadora</th>
										<th>Hora Cobro</th>
										<th>Nombre Receptor</th>
										<th>Detalle Devol</th>
										<th>Concepto1</th>
										<th>Codigo Cajero</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($registros as $registro)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $registro->fechaCreacionFichero }}</td>
											<td>{{ $registro->tipo_id_receptor }}</td>
											<td>{{ $registro->num_id_receptor }}</td>
											<td>{{ $registro->forma_de_pago }}</td>
											<td>{{ $registro->codigo_banc_receptor }}</td>
											<td>{{ $registro->oficina_cta_recepbbva }}</td>
											<td>{{ $registro->Numero_cta_repbbva }}</td>
											<td>{{ $registro->cta_recp_nachan }}</td>
											<td>{{ $registro->Num_cuenta_nachan }}</td>
											<td>{{ $registro->valor_ope_part_entera }}</td>
											<td>{{ $registro->valor_ope_decimal }}</td>
											<td>{{ $registro->fecha_proceso }}</td>
											<td>{{ $registro->fecha_lim_pago }}</td>
											<td>{{ $registro->fecha_cobro }}</td>
											<td>{{ $registro->cod_ofc_pagadora }}</td>
											<td>{{ $registro->hora_cobro }}</td>
											<td>{{ $registro->nombre_receptor }}</td>
											<td>{{ $registro->detalle_devol }}</td>
											<td>{{ $registro->Concepto1 }}</td>
											<td>{{ $registro->Codigo_cajero }}</td>

                                            <td>
                                                <form action="{{ route('registros.destroy',$registro->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('registros.show',$registro->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('registros.edit',$registro->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $registros->links() !!}
            </div>
        </div>
    </div>
@endsection
