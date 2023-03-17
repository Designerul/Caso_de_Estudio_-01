@foreach ($books as $book)

{{-- Recuperacion de libro --}}
<div class="col">
    <div class="card">

        {{-- Recuperacion de portada del libro --}}
        <div class="text-center">
            <img src="{{ asset($book->portada) }} " class="card-img-top" alt="..."
                style="max-height: 400pX; max-width: 300px;">
        </div>

        <div class="card-body">
            <h5 class="card-title cursor-pointer">{{ $book->titulo }}</h5>
            <h6 class="card-subtitle">{{ $book->author->autor }}</h6>
            <div class="clearfix">
                <p class="mb-0 float-start"><strong>{{ $book->number->numero_ejemplares }}</strong> Disponibles</p>
                <p class="mb-0 float-end fw-bold"><span>${{ $book->precio }}</span></p>
            </div>
            <a href="{{ route('book.show', $book) }}" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Ver">
                <i class="lni lni-eye"></i>
                Ver
            </a>
        </div>

    </div>
</div>

@endforeach