<x-layout>

    <x-navbar />
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <img src="{{ Storage::url($shoe->cover) }}" alt="Immagine di {{ $shoe->title }}" class="img-fluid">
                <p class="fw-bold">{{ $shoe->title }}</p>

                <div class="row">
                    <span class="col-10">{{ $shoe->price }} $</span>
                    <span class="col-2">{{ $shoe->size }} </span>
                </div>

                <hr>
                <p>
                    <div class="row">
                        <div class="col-2">
                            Style:          
                        </div>
                        <div class="col fw-bold">
                            {{ $shoe->style }}       
                        </div>
                    </div>
                </p>
                
                <p>
                    <div class="row">
                        <div class="col-2">
                            <span>Colorway:</span>           
                        </div>
                        <div class="col fw-bold">
                            <span>{{ $shoe->colorway }} </span>      
                        </div>
                    </div>
                </p>

                <p>
                    <!-- Spazio -->
                </p>
                <p>
                    <a href="{{ route('shop') }}" class="btn btn-rounded btn-lg btn-outline-primary">Torna indietro</a>
                    <p>
                        <a href="{{ route('edit', compact('shoe')) }}" class="btn btn-rounded btn-lg btn-warning" value="Delete" >Modifica</a>
                    </p>
                    <form action="{{ route('destroy', compact('shoe')) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-rounded btn-lg btn-danger" >Delete</button>
                    </form>
                </p>



            </div>
        </div>
    </div>



</x-layout>