@extends('layouts.view')

@section('section')
<div class="card">
    <div class="row g-0">

        <div class="col-md-4 text-center" style="background-color: #ebe8e8">

            <img src="{{ asset($book->portada)}}" class="img-fluid" alt="...">

        </div>

        <div class="col-md-8">
            <div class="card-body">
                <h4 class="card-title">{{ $book->titulo }}</h4>
                <h5 class="card-subtitle">{{ $book->author->autor }}</h5>
                <div class="d-flex gap-3 py-3">
                    <div class="cursor-pointer">
                        <i class='bx bxs-star text-warning'></i>
                        <i class='bx bxs-star text-warning'></i>
                        <i class='bx bxs-star text-warning'></i>
                        <i class='bx bxs-star text-warning'></i>
                        <i class='bx bxs-star text-secondary'></i>
                    </div>
                    <div class="text-success">{{ $book->number->numero_ejemplares }} Disponibles</div>
                </div>
                <div class="mb-3">
                    <span class="price h4">${{ $book->precio }}</span>
                </div>
                <dl class="row">
                    <dt class="col-sm-3">Categoria</dt>
                    <dd class="col-sm-9">{{ $book->category->categoria }}</dd>

                    <dt class="col-sm-3">Editorial</dt>
                    <dd class="col-sm-9">{{ $book->editorial->editorial }}</dd>

                    <dt class="col-sm-3">Encuadernacion</dt>
                    <dd class="col-sm-9">{{ $book->bookbinding->encuadernacion }}</dd>

                    <dt class="col-sm-3">Tipo de libro</dt>
                    <dd class="col-sm-9">{{ $book->type->tipo }}</dd>
                </dl>
                <hr>

                <div class="d-flex gap-3 mt-3">
                    {{-- <a href="#" class="btn btn-primary">Comprar</a> --}}
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#buyModal" title="Comprar">
                        <i class='bx bxs-cart-alt'></i>Comprar
                    </button>
                    {{-- <a href="#" class="btn btn-outline-primary"><span class="text">Agregar</span> <i class='bx bxs-cart-alt'></i></a> --}}
                </div>
            </div>
        </div>

        {{-- Modal de Compra --}}
        <div class="modal fade" id="buyModal" tabindex="-1" aria-labelledby="buyModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content" style="width: 70%; margin: auto;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="buyModalLabel">Comprar:</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- Formulario de Compra --}}
                        {!! Form::open(['route' => 'buy.store', 'class' => 'row g-3', 'enctype' =>
                        'multipart/form-data']) !!}

                        {{-- Numero de copias --}}
                        <div class="col-sm-6">
                            {!! Form::label('cantidad', 'No. copias:', ['class' => 'form-label']) !!}
                            <input class="form-control" type="number" id="cantidad" name="cantidad" min="1"
                                max="{{ $book->number->numero_ejemplares }}">
                        </div>

                        {{-- Forma de envio --}}
                        <div class="col-sm-6">
                            {!! Form::label('envio', 'Forma de envio:', ['class' => 'form-label']) !!}
                            <select class="form-control" name="envio" id="envio">
                                <option value="Sin seleccionar" selected>Sin seleccionar</option>
                                <option value="Recoger en tienda">Recoger en tienda</option>
                                <option value="Envio por correo">Envio por correo</option>
                            </select>
                        </div>

                        {{-- Tipo de pago --}}
                        <div class="col-sm-6">
                            {!! Form::label('pago', 'Tipo de pago:', ['class' => 'form-label']) !!}
                            <select class="form-control" name="pago" id="pago">
                                <option value="Sin seleccionar" selected>Sin seleccionar</option>
                                <option value="Efectivo">Efectivo</option>
                                <option value="Tarjeta">Tarjeta</option>
                                <option value="Con gallinas">Con gallinas</option>
                                <option value="Con cuerpo">Con cuerpo</option>
                            </select>
                        </div>

                        {{-- Tipo de pago --}}
                        <div class="col-sm-6">
                            {!! Form::label('forma_envio', 'Formas de envio:', ['class' => 'form-label']) !!}
                            <select class="form-control" name="forma_envio" id="forma_envio">
                                <option value="Sin seleccionar" selected>Sin seleccionar</option>
                                <option value="DHL">DHL</option>
                                <option value="FEDEX">FEDEX</option>
                                <option value="UPS">UPS</option>
                                <option value="UBER">UBER</option>
                            </select>
                        </div>

                        {{-- Libro el cual se va comprar --}}
                        {!! Form::hidden('book_id', $book->id) !!}
                        {!! Form::hidden('precio', $book->precio) !!}


                        {{-- Boton para Agregar Compra --}}
                        <div class="col-12 text-center pt-2">
                            {!! Form::submit('Comprar', ['class' => 'btn btn-primary']) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

        <hr />
        <div class="card-body">
            <ul class="nav nav-tabs nav-primary mb-0" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab"
                        aria-selected="true">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon"><i class='bx bx-comment-detail font-18 me-1'></i>
                            </div>
                            <div class="tab-title">Sinopsis</div>
                        </div>
                    </a>
                </li>
                <div class="tab-content pt-3">
                    <div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
                        <p>{{ $book->sinopsis }}</p>

                    </div>
                </div>
        </div>

    </div>


    <h6 class="text-uppercase mb-0">Libros relacionados</h6>
    <hr />
    <div class="row row-cols-1 row-cols-lg-4">

        @foreach ($categories as $category)

        {{-- Recuperacion de libro --}}
        <div class="col">
            <div class="card">

                {{-- Recuperacion de portada del libro --}}
                <div class="text-center">
                    <img src="{{ asset($category->portada) }} " class="card-img-top" alt="..."
                        style="max-height: 400pX; max-width: 300px;">
                </div>

                <div class="card-body">
                    <h5 class="card-title cursor-pointer">{{ $category->titulo }}</h5>
                    <h6 class="card-subtitle">{{ $category->author->autor }}</h6>
                    <div class="clearfix">
                        <p class="mb-0 float-start"><strong>{{ $category->number->numero_ejemplares }}</strong>
                            Disponibles</p>
                        <p class="mb-0 float-end fw-bold"><span>${{ $category->precio }}</span></p>
                    </div>
                    <a href="{{ route('book.show', $category->id) }}" class="btn btn-primary"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Ver">
                        <i class="lni lni-eye"></i>
                        Ver
                    </a>
                </div>

            </div>
        </div>

        @endforeach

    </div>

    <h6 class="text-uppercase mb-0">Libros del mismo autor</h6>
    <hr />
    <div class="row row-cols-1 row-cols-lg-4">

        @foreach ($authors as $author)

        {{-- Recuperacion de libro --}}
        <div class="col">
            <div class="card">

                {{-- Recuperacion de portada del libro --}}
                <div class="text-center">
                    <img src="{{ asset($author->portada) }} " class="card-img-top" alt="..."
                        style="max-height: 400pX; max-width: 300px;">
                </div>

                <div class="card-body">
                    <h5 class="card-title cursor-pointer">{{ $author->titulo }}</h5>
                    <h6 class="card-subtitle">{{ $author->author->autor }}</h6>
                    <div class="clearfix">
                        <p class="mb-0 float-start"><strong>{{ $author->number->numero_ejemplares }}</strong>
                            Disponibles</p>
                        <p class="mb-0 float-end fw-bold"><span>${{ $author->precio }}</span></p>
                    </div>
                    <a href="{{ route('book.show', $author->id) }}" class="btn btn-primary"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Ver">
                        <i class="lni lni-eye"></i>
                        Ver
                    </a>
                </div>

            </div>
        </div>

        @endforeach

    </div>

</div>
@endsection


