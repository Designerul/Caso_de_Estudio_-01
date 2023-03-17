@extends('layouts.view')

@section('section')
<div class="card">
    <div class="card-body">

        <div class="table-responsive">
            <table class="table mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Orden</th>
                        <th>Titulo</th>
                        <th>Cantidad</th>
                        <th>Envio</th>
                        <th>Status</th>
                        <th>Total</th>
                        <th>Fecha y Hora</th>
                        <th>Detalles</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($buys as $buy)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="ms-2">
                                    <h6 class="mb-0 font-14">#OS-000{{ $buy->id }}</h6>
                                </div>
                            </div>
                        </td>
                        <td>{{ $buy->book->titulo }}</td>
                        <td>{{ $buy->cantidad }}</td>
                        <td>{{ $buy->envio }}</td>
                        <td>
                            @if ($buy->status == 1)
                            <div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3">
                                <i class='bx bxs-circle me-1'>
                                    Procesando
                                </i>
                            </div>
                            @endif

                            @if ($buy->status == 2)
                            <div class="badge rounded-pill text-info bg-light-info p-2 text-uppercase px-3">
                                <i class='bx bxs-circle me-1'>
                                    Despachando
                                </i>
                            </div>
                            @endif

                            @if ($buy->status == 3)
                            <div class="badge rounded-pill text-warning bg-light-warning p-2 text-uppercase px-3">
                                <i class='bx bxs-circle me-1'>
                                    En camino
                                </i>
                            </div>
                            @endif

                            @if ($buy->status == 4)
                            <div class="badge rounded-pill text-danger bg-light-danger p-2 text-uppercase px-3">
                                <i class='bx bxs-circle me-1'>
                                    Entregado
                                </i>
                            </div>
                            @endif
                            
                        </td>
                        <td>${{ $buy->total }}</td>
                        <td>{{ $buy->created_at }}</td>
                        <td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">Detalles</button>
                        </td>
                    </tr> 
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection