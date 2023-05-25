<!-- Pagina prodotti -->

<x-layout>

    <x-navbar />

    @if(session('shoeCreated'))
        <div class="alert alert-success">
            	{{ session('shoeCreated') }}
        </div>
    @endif

    @if(session('shoeUpdated'))
        <div class="alert alert-success">
            	{{ session('shoeUpdated') }}
        </div>
    @endif

    @if(session('shoeDestroyed'))
        <div class="alert alert-success">
            	{{ session('shoeDestroyed') }}
        </div>
    @endif

    <div class="container col-12">
        <div class="row justify-content-center">
            <div class="d-flex">
                @if(count($shoes) > 0)
                @foreach($shoes as $shoe)
                <a href="{{ route('show', compact('shoe')) }}" class="card-link text-decoration-none text-reset" >
                    <div class="card border-0 card-hover me-3" style="width: 20rem;">
                        <img class="card-img-top" src="{{ Storage::url($shoe->cover) }}" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $shoe->title}}</h5>
                            <div class="d-flex">
                                <p class="card-text col-8">{{ $shoe->price }} €</p>
                                <p class="card-text">{{ $shoe->size }}</p>
                            </div>
                            <a href="#" class="btn btn-primary mt-3">Add To Cart</a>
                        </div>
                    </div> 
                </a>
                @endforeach
                @else
                    <div class="col-12 text-center">
                        <h2>Nessun prodotto disponibile</h2>
                    </div>
                @endif
            </div> 
        </div>
    </div>

</x-layout>